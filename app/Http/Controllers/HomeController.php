<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cart;
use App\Models\Wishlist;
use App\Models\Product;
use App\Models\Order;
use App\Models\Message;
use App\Models\Feedback;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::user()->usertype == '1') {
            $user = auth()->user();

            $users = user::all();

            $countuser = user::all()->count();

            $order = order::all();

            $countorder = order::all()->count();

            $product = product::all();

            $countproduct = product::all()->count();

            $mess = message::all();

            $countmess = message::all()->count();

            $profit = 0;

            foreach ($order as $orders) {
                if ($orders->status == "Approved") {
                    $profit = $profit + $orders->price;
                }
            }

            return view('admin.home', compact('user', 'users', 'order', 'product', 'mess', 'countuser', 'countorder', 'countproduct', 'countmess', 'profit'));
        } elseif (Auth::user()->usertype == '0') {
            $data = product::latest()->paginate(6);

            $user = auth()->user();

            $cart = cart::where('id_user', $user->id)->get();

            $count = cart::where('id_user', $user->id)->count();

            $wishlist = wishlist::where('id_user', $user->id)->get();

            $count_wishlist = wishlist::where('id_user', $user->id)->count();

            return view('User.home', compact('data', 'count', 'cart', 'count_wishlist', 'wishlist'));
        } else {
            $data = product::all();

            return view('User.home', compact('data'));
        }
    }

    public function index()
    {
        if (Auth::id()) {
            return redirect('redirect');
        } else {
            $data = product::all();

            return view('User.home', compact('data'));
        }
    }

    // FAQ
    public function FAQ()
    {
        if (Auth::id()) {
            $data = product::all();

            $user = auth()->user();

            $cart = cart::where('id_user', $user->id)->get();

            $count = cart::where('id_user', $user->id)->count();

            $wishlist = wishlist::where('id_user', $user->id)->get();

            $count_wishlist = wishlist::where('id_user', $user->id)->count();

            return view('User.FAQ', compact('data', 'count', 'cart', 'count_wishlist', 'wishlist'));
        } else {
            $data = product::all();

            return view('User.FAQ', compact('data'));
        }
    }

    // Products
    public function product()
    {
        if (Auth::id()) {
            $data = product::paginate(12);

            $user = auth()->user();

            $cart = cart::where('id_user', $user->id)->get();

            $count = cart::where('id_user', $user->id)->count();

            $wishlist = wishlist::where('id_user', $user->id)->get();

            $count_wishlist = wishlist::where('id_user', $user->id)->count();

            return view('User.shop', compact('data', 'count', 'cart', 'count_wishlist', 'wishlist'));
        } else {
            $data = product::paginate(12);
			
			$count_wishlist=0;

            return view('User.shop', compact('data', 'count_wishlist'));
        }
    }

    public function productdetail($id)
    {
        if (Auth::id()) {
            $data = product::find($id);

            $user = auth()->user();

            $review = feedback::where('id_product', $id)->get();

            $countfeedback = feedback::where('id_product', $data->id)->count();

            $cart = cart::where('id_user', $user->id)->get();

            $count = cart::where('id_user', $user->id)->count();

            $wishlist = wishlist::where('id_user', $user->id)->get();

            $count_wishlist = wishlist::where('id_user', $user->id)->count();

            $product = product::all();

            return view('User.productdetail', compact('data', 'count', 'cart', 'product', 'count_wishlist', 'wishlist', 'review', 'countfeedback', 'user'));
        } else {
            $data = product::find($id);

            $review = feedback::where('id_product', $id)->get();

            $countfeedback = feedback::where('id_product', $data->id)->count();

            $product = product::all();

            return view('User.productdetail', compact('data', 'review', 'countfeedback', 'product'));
        }
    }

    // Order
    public function trackorder()
    {
        if (Auth::id()) {
            $data = product::all();

            $user = auth()->user();

            $cart = cart::where('id_user', $user->id)->get();

            $count = cart::where('id_user', $user->id)->count();

            $wishlist = wishlist::where('id_user', $user->id)->get();

            $count_wishlist = wishlist::where('id_user', $user->id)->count();

            $order = order::where('id_user', $user->id)->get();

            return view('User.trackorder', compact('data', 'count', 'cart', 'count_wishlist', 'wishlist', 'order'));
        } else {

            return view('auth.login');
        }
    }

    public function detailorder($id)
    {
        if (Auth::id()) {
            $data = product::paginate(8);

            $user = auth()->user();

            $cart = cart::where('id_user', $user->id)->get();

            $count = cart::where('id_user', $user->id)->count();

            $wishlist = wishlist::where('id_user', $user->id)->get();

            $count_wishlist = wishlist::where('id_user', $user->id)->count();

            $order = order::find($id);

            return view('User.detailorder', compact('data', 'count', 'cart', 'count_wishlist', 'wishlist', 'order'));
        } else {

            return view('auth.login');
        }
    }

    // Function
    public function search(Request $request)
    {
        if (Auth::id()) {
            $search = $request->search;

            if ($search == '') {
                $data = product::paginate(12);

                $user = auth()->user();

                $cart = cart::where('id_user', $user->id)->get();
    
                $count = cart::where('id_user', $user->id)->count();
    
                $wishlist = wishlist::where('id_user', $user->id)->get();
    
                $count_wishlist = wishlist::where('id_user', $user->id)->count();    

                return view('User.shop', compact('data', 'count', 'cart', 'count_wishlist', 'wishlist'));
            }

            $user = auth()->user();

            $cart = cart::where('id_user', $user->id)->get();

            $count = cart::where('id_user', $user->id)->count();

            $wishlist = wishlist::where('id_user', $user->id)->get();

            $count_wishlist = wishlist::where('id_user', $user->id)->count();

            $data = product::where('title', 'Like', '%' . $search . '%')->get();

            return view('User.shop', compact('data', 'count', 'cart', 'count_wishlist', 'wishlist'));
        } else {
            $search = $request->search;

            if ($search == '') {
                $data = product::paginate(8);

                return view('User.shop', compact('data'));
            }

            $data = product::where('title', 'Like', '%' . $search . '%')->get();

            return view('User.shop', compact('data'));
        }
    }

    // Cart
    public function showcart()
    {
        if (Auth::id()) {
            $product = product::all();

            $user = auth()->user();

            $cart = cart::where('id_user', $user->id)->get();

            $count = cart::where('id_user', $user->id)->count();

            $wishlist = wishlist::where('id_user', $user->id)->get();

            $count_wishlist = wishlist::where('id_user', $user->id)->count();

            return view('User.showcart', compact('product', 'count', 'cart', 'count_wishlist', 'wishlist'));
        } else {
            return view('auth.login');
        }
    }

    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {
            $user = auth()->user();

            $product = product::find($id);

            $cart = new cart();

            $cart->id_user = $user->id;
            $cart->name = $user->name;
            $cart->id_product = $product->id;
            $cart->product_title = $product->title;
            $cart->quatity = $request->quatity;
            $cart->size = $request->size;
            $cart->price = $product->price;
            $cart->image = $product->image1;

            $cart->save();

            return redirect()->back()->with('message', 'Product Addcart Successfully!');
        } else {
            return redirect('auth.login');
        }
    }

    public function updatecart(Request $request, $id)
    {
        if (Auth::id()) {

            $data = cart::find($id);

            $data->quatity = $request->quatity;

            $data->save();

            return redirect()->back()->with('message', 'Cart Update Successfully!');
        } else {
            return redirect('auth.login');
        }
    }

    public function deletecart($id)
    {
        $data = cart::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Product has deleted out cart');
    }
    
    public function updatecoupon(Request $request, $id)
    {
        $carts = cart::all();

        $data = cart::find($id);

        foreach ($carts as $cart) {
            if ($data->id_user==$cart->id_user){
                $cart->coupon = $request->coupon;
                $cart->save();
            }
        }

        return redirect()->back()->with('message', 'Your Coupon has apllied!');
    }

    // Wishlist
    public function wishlist()
    {
        if (Auth::id()) {
            $product = product::all();

            $data = product::all();

            $user = auth()->user();

            $cart = cart::where('id_user', $user->id)->get();

            $count = cart::where('id_user', $user->id)->count();

            $wishlist = wishlist::where('id_user', $user->id)->get();

            $count_wishlist = wishlist::where('id_user', $user->id)->count();

            return view('User.wishlist', compact('data', 'product', 'count_wishlist', 'wishlist', 'count', 'cart'));
        } else {
            return view('auth.login');
        }
    }

    public function addwishlist(Request $request, $id)
    {
        if (Auth::id()) {
            $user = auth()->user();

            $product = product::find($id);

            $wishlists = wishlist::all();

            foreach ($wishlists as $wish) {
                if ($product->id == $wish->id_product and $wish->id_user == $user->id) {
                    return redirect()->back()->with('warning', 'The item already has in wishlist!');
                }
            }

            $wishlist = new wishlist();

            $wishlist->id_user = $user->id;

            $wishlist->id_product = $product->id;

            $wishlist->save();

            return redirect()->back()->with('message', 'Wishlist Added Successfully!');
        } else {
            return redirect('login');
        }
    }

    public function deletewishlist($id)
    {
        $data = wishlist::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Product has deleted out wishlist');
    }

    // About
    public function about()
    {
        if (Auth::id()) {
            $data = product::all();

            $user = auth()->user();

            $cart = cart::where('id_user', $user->id)->get();

            $count = cart::where('id_user', $user->id)->count();

            $wishlist = wishlist::where('id_user', $user->id)->get();

            $count_wishlist = wishlist::where('id_user', $user->id)->count();

            return view('User.about', compact('data', 'count', 'cart', 'count_wishlist', 'wishlist'));
        } else {
            $data = product::all();

            return view('User.about', compact('data'));
        }
    }

    // Contact
    public function contact()
    {
        if (Auth::id()) {
            $data = product::all();

            $user = auth()->user();

            $cart = cart::where('id_user', $user->id)->get();

            $count = cart::where('id_user', $user->id)->count();

            $wishlist = wishlist::where('id_user', $user->id)->get();

            $count_wishlist = wishlist::where('id_user', $user->id)->count();

            return view('User.contact', compact('data', 'count', 'cart', 'user', 'count_wishlist', 'wishlist'));
        } else {
            $data = product::all();
            $user = auth()->user();

            return view('User.contact', compact('data', 'user'));
        }
    }

    public function sendmessage(Request $request)
    {
        if (Auth::id()) {
            $data = new message;

            $user = auth()->user();

            $data->id_user = $user->id;

            $data->email = $request->email;

            $data->message = $request->message;

            $data->save();

            return redirect()->back()->with('message', 'Your Message Has Sent Successfully!');
        } else {
            return view('auth.login');
        }
    }

    // Payment
    public function payment()
    {
        if (Auth::id()) {
            $data = product::all();

            $user = auth()->user();

            $cart = cart::where('id_user', $user->id)->get();

            $count = cart::where('id_user', $user->id)->count();

            $wishlist = wishlist::where('id_user', $user->id)->get();

            $count_wishlist = wishlist::where('id_user', $user->id)->count();

            if ($count==0){
                return view('User.shop', compact('data', 'count', 'cart', 'count_wishlist', 'wishlist'));
            }
            return view('User.showpayment', compact('data', 'count', 'cart', 'user', 'count_wishlist', 'wishlist'));
        } else {
            return view('auth.login');
        }
    }

    public function paymentcod()
    {
        if (Auth::id()) {
            $data = product::all();

            $user = auth()->user();

            $cart = cart::where('id_user', $user->id)->get();

            $count = cart::where('id_user', $user->id)->count();

            $wishlist = wishlist::where('id_user', $user->id)->get();

            $count_wishlist = wishlist::where('id_user', $user->id)->count();
            
            if ($count==0){
                return view('User.shop', compact('data', 'count', 'cart', 'count_wishlist', 'wishlist'));
            }

            return view('User.showpaymentcod', compact('data', 'count', 'cart', 'user', 'count_wishlist', 'wishlist'));
        } else {
            return view('auth.login');
        }
    }

    public function confirmpayment(Request $request)
    {
        if (Auth::id()) {
            $data = new order;

            $user = auth()->user();

            $data->id_user = $user->id;

            $data->firstname = $request->firstname;

            $data->lastname = $request->lastname;

            $data->email = $request->email;

            $data->phone = $request->phone;

            $data->address = $request->address;

            $data->country = $request->country;

            $data->state = $request->state;

            $data->zip = $request->zip;

            $data->method = $request->method;

            $data->cc_name = $request->cc_name;

            $data->cc_number = $request->cc_number;

            $data->cc_expiration = $request->cc_expiration;

            $data->cc_cvv = $request->cc_cvv;

            $data->items = $request->items;

            $data->price = $request->price;

            $data->status = 'Pending';

            $data->save();

            $cart = cart::where('id_user', $user->id)->get();

            foreach ($cart as $carts) {
                $carts->delete();
            }

            return redirect('trackorder')->with('message', 'Your Order Has Payment Successfully!');
        } else {
            return view('auth.login');
        }
    }

    public function confirmpaymentcod(Request $request)
    {
        if (Auth::id()) {
            $data = new order;

            $user = auth()->user();

            $data->id_user = $user->id;

            $data->firstname = $request->firstname;

            $data->lastname = $request->lastname;

            $data->email = $request->email;

            $data->phone = $request->phone;

            $data->address = $request->address;

            $data->country = $request->country;

            $data->state = $request->state;

            $data->zip = $request->zip;

            $data->method = 'Cash on Delivery';

            $data->items = $request->items;

            $data->price = $request->price;

            $data->status = 'Pending';

            $data->save();

            $cart = cart::where('id_user', $user->id)->get();

            foreach ($cart as $carts) {
                $carts->delete();
            }

            return redirect('trackorder')->with('message', 'Your Order Has Payment Successfully!');
        } else {
            return view('auth.login');
        }
    }

    // Review
    public function feedback(Request $request, $id)
    {
        if (Auth::id()) {
            $data = new feedback;

            $user = auth()->user();

            if ($request->rating == NULL or $request->rating == 0 or $request->review == NULL) {
                return redirect()->back()->with('warning', 'You need to fill all feedback before submit!');
            } else {
                $data->id_user = $user->id;

                $data->id_product = $id;

                $data->user_name = $user->name;

                $data->email = $user->email;

                $data->rating = $request->rating;

                $data->feedback = $request->review;

                $data->save();

                return redirect()->back()->with('message', 'Your Feedback Has Submit Successfully!');
            }
        } else {
            return view('auth.login');
        }
    }

    public function deletefeedback($id)
    {
        $data = feedback::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Your Feedback has deleted!');
    }

}
