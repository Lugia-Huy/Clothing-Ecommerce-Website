<!-- Filter -->
<div class="dis-none panel-filter w-full p-t-10">
    <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
        <div class="filter-col1 p-r-15 p-b-27">
            <div class="mtext-102 cl2 p-b-15">
                Sort By Type
            </div>

            <?php 
                $jacket='jacket';
                $shirt='shirt';
                $pant='pant';
                $dress='dress';
                $sport='sport';
                $accessories='accessories';
            ?>
            <ul>
                <li class="p-b-6">
                    <a href="{{url('shop', $jacket)}}" class="filter-link stext-106 trans-04">
                        Jacket
                    </a>
                </li>

                <li class="p-b-6">
                    <a href="#" class="filter-link stext-106 trans-04">
                        T-shirt
                    </a>
                </li>

                <li class="p-b-6">
                    <a href="#" class="filter-link stext-106 trans-04">
                        Pant
                    </a>
                </li>

                <li class="p-b-6">
                    <a href="#" class="filter-link stext-106 trans-04">
                        Dress
                    </a>
                </li>

                <li class="p-b-6">
                    <a href="#" class="filter-link stext-106 trans-04">
                        Sport
                    </a>
                </li>

                <li class="p-b-6">
                    <a href="#" class="filter-link stext-106 trans-04">
                        Accessories
                    </a>
                </li>
            </ul>
        </div>

        <div class="filter-col3 p-r-15 p-b-27">
            <div class="mtext-102 cl2 p-b-15">
                Price
            </div>

            <ul>
                <li class="p-b-6">
                    <a href="#" class="filter-link stext-106 trans-04" data-filter="*">
                        All
                    </a>
                </li>

                <li class="p-b-6">
                    <a href="#" class="filter-link stext-106 trans-04">
                        $0.00 - $25.00
                    </a>
                </li>

                <li class="p-b-6">
                    <a href="#" class="filter-link stext-106 trans-04">
                        $25.00 - $50.00
                    </a>
                </li>

                <li class="p-b-6">
                    <a href="#" class="filter-link stext-106 trans-04">
                        $50.00 - $75.00
                    </a>
                </li>

                <li class="p-b-6">
                    <a href="#" class="filter-link stext-106 trans-04">
                        $75.00 - $100.00
                    </a>
                </li>

                <li class="p-b-6">
                    <a href="#" class="filter-link stext-106 trans-04">
                        $100.00+
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>