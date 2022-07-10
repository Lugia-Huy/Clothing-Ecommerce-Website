<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use App\Models\Feedback;
use App\Models\Message;

class AdminController extends Controller
{
    // Users
    public function showuser()
    {
        if (Auth::user()->usertype=='1') {
            $user = auth()->user();

            $users = user::all();

            return view('admin.users', compact('user', 'users'));
        } else {
            return redirect('login');
        }
    }

    public function userinfo($id)
    {
        $data = user::find($id);

        $user=auth()->user();

        return view('admin.updateuser', compact('data', 'user'));
    }

    public function updateuser(Request $request, $id)
    {
        $data = user::find($id);        

        $data->name = $request->name;

        $data->email = $request->email;

        $data->phone = $request->phone;

        $data->address = $request->address;

        $data->save();

        return redirect()->back()->with('message', 'User Updated Successfully!');
    }

    public function deleteuser($id)
    {
        $data = user::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'User Deleted Successfully!');
    }

    // Products
    public function product()
    {
        if (Auth::user()->usertype=='1') {
            $user = auth()->user();

            return view('admin.product', compact('user'));
        } else {
            return redirect('login');
        }
        
    }

    public function uploadproduct(Request $request)
    {
        $data = new product;

        $image1 = $request->image1;
        $imagename1 = time().rand(1,99) . '.' . $image1->getClientOriginalExtension();
        $request->image1->move('productimage', $imagename1);
        $data->image1 = $imagename1;

        $image2 = $request->image2;
        $imagename2 = time().rand(1,99) . '.' . $image2->getClientOriginalExtension();
        $request->image2->move('productimage', $imagename2);
        $data->image2 = $imagename2;

        $image3 = $request->image3;
        $imagename3 = time().rand(1,99) . '.' . $image3->getClientOriginalExtension();
        $request->image3->move('productimage', $imagename3);
        $data->image3 = $imagename3;

        $data->title = $request->title;

        $data->price = $request->price;

        $data->description = $request->description;

        $data->category = $request->category;
        
        $data->gender = $request->gender;

        $data->size = $request->size;

        $data->save();

        return redirect()->back()->with('message', 'Product Added Successfully!');
    }

    public function showproduct()
    {
        $data = product::all();
        $user = auth()->user();

        return view('admin.showproduct', compact('data', 'user'));
    }

    public function detailproduct($id)
    {
        $data = product::find($id);
        
        $data->delete();

        return redirect()->back()->with('message', 'Product Deleted Successfully!');
    }

    public function updateview($id)
    {
        $data = product::find($id);

        $user=auth()->user();

        return view('admin.updateproduct', compact('data', 'user'));
    }

    public function updateproduct(Request $request, $id)
    {
        $data = product::find($id);

        $image1 = $request->image1;
        if($image1)
        {
            $imagename1 = time().rand(1,99) . '.' . $image1->getClientOriginalExtension();

            $request->image1->move('productimage', $imagename1);
    
            $data->image1 = $imagename1;
        }
        $image2 = $request->image2;

        if($image2)
        {
            $imagename2 = time().rand(1,99) . '.' . $image2->getClientOriginalExtension();

            $request->image2->move('productimage', $imagename2);
    
            $data->image2 = $imagename2;
        }
        $image3 = $request->image3;

        if($image3)
        {
            $imagename3 = time().rand(1,99) . '.' . $image3->getClientOriginalExtension();

            $request->image3->move('productimage', $imagename3);
    
            $data->image3 = $imagename3;
        }
        

        $data->title = $request->title;

        $data->price = $request->price;

        $data->description = $request->description;

        $data->category = $request->category;
    
        $data->gender = $request->gender;

        $data->size = $request->size;

        $data->save();

        return redirect()->back()->with('message', 'Product Updated Successfully!');
    }

    public function deleteproduct($id)
    {
        $data = product::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Product Deleted Successfully!');
    }

    // Orders
    public function showorder()
    {
        $user = auth()->user();

        $data = order::all();

        return view('admin.showorders', compact('data', 'user'));
    }
    
    public function updatestatus($id)
    {
        $order = order::find($id);

        $order->status='Approved';

        $order->save();

        return redirect()->back()->with('message', 'Order has competed!');
    }
    
    public function denystatus($id)
    {
        $order = order::find($id);

        $order->status='Rejected';

        $order->save();

        return redirect()->back()->with('message', 'Order has rejected!');
    }

    // Message
    public function showmessage()
    {
        $user = auth()->user();

        $users = user::all();

        $data = message::all();

        return view('admin.showmessage', compact('data', 'user', 'users'));
    }
    
    // Review
    public function showreview()
    {
        $user = auth()->user();

        $users = user::all();

        $products = product::all();

        $data = feedback::all();

        return view('admin.showreview', compact('data', 'user', 'users', 'products'));
    }

    public function denyreview($id)
    {
        $data = feedback::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Review has deleted!');
    }
}
