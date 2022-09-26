<style type="text/css">
    .product-menu{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--theme-color-bg);
        padding: 1em 0em;
    }

    .product-menu-inner{
        width: 60%;
        display: flex;
        /* align-items: center; */
        justify-content: center;

    }

    .product-sidebar{
        min-width: 24%;
        /* padding: 1em; */
        margin-right: 1em;
    }

    .product-search-div{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0.5em ;
        background: white;
        border: 1px solid var(--theme-color-transparent);
        border-radius: 0.2em;
    }

    .product-search-div input[type="text"]{
        width: 100%;
        padding: 0.5em 1em;
        outline: none;
        border: none;
    }

    .product-search-div .search-btn{
        padding: 0.5em;
        border: none;
        color: white;
        background: var(--theme-color-a);
        cursor: pointer;
    }

    .product-search-div .product-search{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: white;
        border: 1px solid var(--theme-color-transparent);
        border-radius: 0.2em;
        overflow: hidden;
    }

    .product-filter-btn-div{
        display: none;
    }

    .product-sidebar ul{
        list-style-type: none;
    }

    .product-sidebar ul li a,
    .product-filter-btn-div a{
        display: flex;
        align-items: center;
        justify-content: space-between;
        border: 1px solid var(--theme-color-transparent);
        padding: 0.5em 1em;
        background: white;
        border-radius: 0.2em;
        font-weight: bold;
        transition: all 0.2s ease-in;
    }

    .product-sidebar ul li a:hover{
        background: rgba(0,0,0,0.01);
    }

    .product-filter-apply-btn-div{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid var(--theme-color-transparent);
        padding: 0.5em 1em;
        background: white;
        border-radius: 0.2em;
    }

    .product-filter-apply-btn-div button{
        padding: 0.5em 4em;
        background: var(--theme-color-font);
        color: white;
        border-radius: 1.5em;
        font-weight: medium;
    }

    .product-display{
        min-width: 74%;
        /* margin-left: 1em; */
    }

    .product-display-sort-div {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: white;
        padding: 0.5em;
    }

    .product-display-sort-div .product-display-sort ul {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .product-display-sort-div .product-display-sort ul li{
        margin: 0em 0.5em;
    }

    .product-display-sort-div .product-display-sort ul li a{
        transition: all 0.2s ease-out;
        font-size: 1.2em;
    }

    .product-display-sort-div .product-display-sort ul li a:hover,
    .active-list{
        color: var(--theme-color-a);
    }

    .product-display-sort-div .product-display-sort ul li .product-sort-div{
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .product-sort-div p{
        font-weight: bold;
        margin: 0em 0.2em;
    }

    .product-sort-div input[type="number"]{
        outline:none;
        padding: 0.5em;
        width: 6em;
    }

    .product-sort-div .btn-clear{
        padding: 0.5em;
        background: var(--theme-color-a);
        color: white;
        cursor: pointer;
    }

    .product-display-content{
        width: 100%;
        overflow: hidden;
        margin-bottom: 1em;
        box-shadow: 0em 0.2em 0.5em 0em rgba(0, 0, 0, 0.2);
        transition: all 0.2s ease-in-out;
    }

    .product-display-content:hover{
        cursor: pointer;
        transform: scale(1.02,1.02);
        box-shadow: 0em 0.4em 0.8em 0em rgba(0, 0, 0, 0.2);
    }

    .product-display-content .product-div{
        width: 100%;
        display: flex;
        /* align-items: center; */
        justify-content: space-between;
        background: white;
    }

    .product-display-content .product-div .product-img-div{
        width: 30%;
    }

    .product-display-content .product-div .product-img-div .product-img{
        width: 100%;
        position: relative;
        /* padding-top: 10em; */
        height: 100%;
    }

    .product-display-content .product-div .product-img-div .product-img .display-img{
        left: 0;
        bottom: 0;
        top: 0;
        right: 0;
        display: flex;
        position: absolute;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        z-index: 99;
    }

    .product-display-content .product-div .product-img-div .product-img .display-img img{
        max-width: 100%;
        max-height: 100%;
    }

    .product-display-content .product-div .product-text-cont-div{
        width: 70%;
        /* margin: 0 1em; */
        padding: 0.2em 1em;
    }

    .product-text-cont-div ul{
        width: 100%;
    }

    .product-text-cont-div ul li{
        padding: 0.2em;
        display: flex;
        align-items: center;
        /* width: 100%; */
    }

    .product-details-li{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .product-text-cont-div ul li ul{
        display: flex;
        width: 100%;
    }

    .product-text-cont-div ul li ul li{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        padding: 0.5em;
        
    }

    .product-text-cont-div ul li ul li p{
        font-size: 0.9em;
    }

    .product-btn-div{
        display: flex;
        align-items: center;
        /* width: 100%; */
        justify-content: flex-end;
    }

    .product-btn-div button{
        padding: 0.8em;
        margin:  0 0.2em;
        color: white;
    }

    .btn-offer{
        background: var(--theme-color-btn);
    }

    .btn-buy{
        background: var(--theme-color-a);
    }


    .product-hr{
        width: 100%;
        border: none;
        opacity: 0.5;
        height: 0.05em;
        background: var(--theme-color-transparent);
        margin: 0.2em 0em;
    }

    @media only screen and (min-width: 400px){
        .pc-mode{
            display: none !important;
        }

        .product-sidebar{
            margin-right: 0em;
        }

        .product-menu-inner{
            width: 98%;
        }

        .tab-mode{
            display: none !important;
        }

        .tab-mode button{
            width: 100%;
            margin: 0.2em 0em;
        }

        .product-menu-inner{
            width: 98%;
            flex-direction: column;
        }

        .product-filter-btn-div{
            display: flex;
        }

        .product-display-content .product-div .product-img-div{
            width: 30%;
        }

        .product-display-content .product-div .product-text-cont-div{
            width: 70%;
        }

        .product-filter-btn-div a{
            width:100% ;
        }

        .product-filters{
            display: none;
            margin-bottom: 1em;
        }

        .product-display-sort-div{
            flex-direction: column;
            align-items: flex-start;
        }

        .product-display-sort{
            margin-top: 1em;
        }
    }

    @media only screen and (max-width: 550px) {
        .product-div{
            flex-direction: column;
        }

        .product-display-content .product-div .product-img-div{
            width: 100%;
        }

        .product-display-content .product-div .product-img-div .product-img{
            width: 100%;
            padding-top:56.3%;
        }

        .product-display-content .product-div .product-text-cont-div{
            width: 100%;
        }
    }

    @media only screen and (min-width: 650px) {
        .product-display-content .product-div .product-img-div{
            width: 40%;
        }

        .product-display-content .product-div .product-text-cont-div{
            width: 60%;
        }

        .product-display-sort-div{
            flex-direction: row;
            align-items: center;
        }

        .product-display-sort{
            margin-top: 0em;
        }
    }

    @media only screen and (max-width: 768px) {
        .product-menu-inner{
            width: 98%;
        }
    }

    @media only screen and (min-width: 768px) {
        .product-menu-inner{
            width: 98%;
        }

        .tab-mode{
            display: flex !important;
            flex-direction: column;
            align-items: center;
            width:100%;
        }

        
    }

    @media only screen and (min-width: 900px) {
        .product-menu-inner{
            width: 98%;
            flex-direction: row;
        }

        .product-sidebar{
            margin-right: 1em;
        }

        .product-display-content .product-div .product-img-div{
            width: 30%;
        }

        .product-display-content .product-div .product-text-cont-div{
            width: 70%;
        }

        .pc-mode{
            display: none !important;
        }

        .tab-mode{
            display: flex !important;
            flex-direction: column;
            align-items: center;
            width:100%;
        }

        .tab-mode button{
            width: 100%;
            margin: 0.2em 0em;
        }

        .product-filter-btn-div{
            display: none;
        }

        .product-filters{
            display: flex !important;
            flex-direction: column;
            margin-bottom: 0em;
        }
    }

    @media only screen and (min-width: 1200px){
        .product-menu-inner{
            width: 95%;
        }

        .pc-mode{
            display: flex !important;
        }

        .tab-mode{
            display: none !important;
        }
    }

    @media only screen and (min-width: 1250px){
        .product-menu-inner{
            width: 90%;
        }
    }

    @media only screen and (min-width: 1400px){
        .product-menu-inner{
            width: 90%;
        }
    }

    @media only screen and (min-width: 1500px){
        .product-menu-inner{
            width: 80%;
        }
    }

    @media only screen and (min-width: 1620px){
        .product-menu-inner{
            width: 70%;
        }
    }

    @media only screen and (min-width: 1890px){
        .product-menu-inner{
            width: 60%;
        }
    }
</style>

<section>
    <div class="product-menu">
        <div class="product-menu-inner">
            <div class="product-sidebar">
                <div class="product-search-div">
                    <div class="product-search">
                        <input type="text" class="form-control" placeholder="Brand/Model/Car">
                        <button type="button" class="search-btn">Search</button>
                    </div>
                </div>
                <br>
                <div class="product-filter-btn-div">
                    <a href="" class="product-filter-btn"><p>Filters </p><i class="fa-solid fa-filter"></i></a>
                </div>
                <br>
                <ul class="product-filters">
                    <li>
                        <a href="" class=""><p>Brands</p><i class="fa-solid fa-plus"></i></a>
                    </li>
                    <li>
                        <a href="" class=""><p>Price Range</p><i class="fa-solid fa-plus"></i></a>
                    </li>
                    <li>
                        <a href="" class=""><p>KM Driven</p><i class="fa-solid fa-plus"></i></a>
                    </li>
                    <li>
                        <a href="" class=""><p>Manufacturing Year</p><i class="fa-solid fa-plus"></i></a>
                    </li>
                    <li>
                        <a href="" class=""><p>Fuel Type</p><i class="fa-solid fa-plus"></i></a>
                    </li>
                    <li>
                        <a href="" class=""><p>Body Type</p><i class="fa-solid fa-plus"></i></a>
                    </li>
                    <li>
                        <a href="" class=""><p>Transmission</p><i class="fa-solid fa-plus"></i></a>
                    </li>
                    <li>
                        <a href="" class=""><p>No of Owner</p><i class="fa-solid fa-plus"></i></a>
                    </li>
                    <li>
                        <div class="product-filter-apply-btn-div">
                            <Button type="button" class="border">Apply Filter</Button>
                        </div>
                        
                    </li>
                </ul>
            </div>

            <!-- <br> -->

            <div class="product-display ">
                <div class="product-display-sort-div border">
                    <p>Showing 1 to 310 of 311 entries</p>
                    <div class="product-display-sort">
                        <ul>
                            <li><a class="active-list" href=""><i class="fa-solid fa-list"></i></a></li>
                            <li><a href=""><i class="fa-solid fa-table-cells"></i></a></li>
                            <li>
                                <div class="product-sort-div">
                                    <p>Sort By: </p>
                                    <input type="number" class="price-sort border" placeholder="Price">
                                    <input type="number" class="latest-sort border" placeholder="Latest">
                                    <button class="btn-clear border" type="button">Clear</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <br>
                <br>
                <div class="product-display-content border">
                    <div class="product-div">
                        <div class="product-img-div">
                            <div class="product-img">
                                <div class="display-img">
                                    <img src="images/car1.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="product-text-cont-div">
                            <ul>
                                <li><h3>2015 Tata Zest XM QJET 90PS ABS</h3></li>
                                <li><span style="color:grey;"><i class="fa-solid fa-location-dot"></i></span>&nbsp;&nbsp;&nbsp; <p><i class="fa-solid fa-calendar-days"></i> &nbsp;2022-09-21 16:24:26</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #FFD801;"><i class="fa-regular fa-heart"></i></span></li>
                                <li><h3>Price: </h3>&nbsp;&nbsp;
                                <span> &#x20B9; 2,95,000</span></li>
                                <li><hr class="product-hr"></li>
                                <li class="product-details-li">
                                    <ul>
                                        <li>
                                            <p class="bold">Reg. No:</p>
                                            <p>CH01BXXXX</p>
                                        </li>
                                        <li><div style="height: 100%; border: 1px solid black; opacity: 0.4;" ></div></li>
                                        <li>
                                            <p class="bold">Insurance Type:</p>
                                        </li>
                                        <li><div style="height: 100%; border: 1px solid black; opacity: 0.4;" ></div></li>
                                        <li>
                                            <p class="bold">Hub City:</p>
                                            <p>NOIDA</p>
                                        </li>
                                        <li>
                                            <div class="product-btn-div pc-mode">
                                                <button class="btn-offer border" >Make An Offer</button>
                                                <button class="btn-buy border" >Buy Now</button>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="product-btn-div tab-mode">
                                        <button class="btn-offer border" >Make An Offer</button>
                                        <button class="btn-buy border" >Buy Now</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="product-display-content border">
                    <div class="product-div">
                        <div class="product-img-div">
                            <div class="product-img">
                                <div class="display-img">
                                    <img src="images/car2.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="product-text-cont-div">
                            <ul>
                                <li><h3>2015 Tata Zest XM QJET 90PS ABS</h3></li>
                                <li><span style="color:grey;"><i class="fa-solid fa-location-dot"></i></span>&nbsp;&nbsp;&nbsp; <p><i class="fa-solid fa-calendar-days"></i> &nbsp;2022-09-21 16:24:26</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #FFD801;"><i class="fa-regular fa-heart"></i></span></li>
                                <li><h3>Price: </h3>&nbsp;&nbsp;
                                <span> &#x20B9; 2,95,000</span></li>
                                <li><hr class="product-hr"></li>
                                <li class="product-details-li">
                                    <ul>
                                        <li>
                                            <p class="bold">Reg. No:</p>
                                            <p>CH01BXXXX</p>
                                        </li>
                                        <li><div style="height: 100%; border: 1px solid black; opacity: 0.4;" ></div></li>
                                        <li>
                                            <p class="bold">Insurance Type:</p>
                                        </li>
                                        <li><div style="height: 100%; border: 1px solid black; opacity: 0.4;" ></div></li>
                                        <li>
                                            <p class="bold">Hub City:</p>
                                            <p>NOIDA</p>
                                        </li>
                                        <li>
                                            <div class="product-btn-div pc-mode">
                                                <button class="btn-offer border" >Make An Offer</button>
                                                <button class="btn-buy border" >Buy Now</button>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="product-btn-div tab-mode">
                                        <button class="btn-offer border" >Make An Offer</button>
                                        <button class="btn-buy border" >Buy Now</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="product-display-content border">
                    <div class="product-div">
                        <div class="product-img-div">
                            <div class="product-img">
                                <div class="display-img">
                                    <img src="images/car3.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="product-text-cont-div">
                            <ul>
                                <li><h3>2015 Tata Zest XM QJET 90PS ABS</h3></li>
                                <li><span style="color:grey;"><i class="fa-solid fa-location-dot"></i></span>&nbsp;&nbsp;&nbsp; <p><i class="fa-solid fa-calendar-days"></i> &nbsp;2022-09-21 16:24:26</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #FFD801;"><i class="fa-regular fa-heart"></i></span></li>
                                <li><h3>Price: </h3>&nbsp;&nbsp;
                                <span> &#x20B9; 2,95,000</span></li>
                                <li><hr class="product-hr"></li>
                                <li class="product-details-li">
                                    <ul>
                                        <li>
                                            <p class="bold">Reg. No:</p>
                                            <p>CH01BXXXX</p>
                                        </li>
                                        <li><div style="height: 100%; border: 1px solid black; opacity: 0.4;" ></div></li>
                                        <li>
                                            <p class="bold">Insurance Type:</p>
                                        </li>
                                        <li><div style="height: 100%; border: 1px solid black; opacity: 0.4;" ></div></li>
                                        <li>
                                            <p class="bold">Hub City:</p>
                                            <p>NOIDA</p>
                                        </li>
                                        <li>
                                            <div class="product-btn-div pc-mode">
                                                <button class="btn-offer border" >Make An Offer</button>
                                                <button class="btn-buy border" >Buy Now</button>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="product-btn-div tab-mode">
                                        <button class="btn-offer border" >Make An Offer</button>
                                        <button class="btn-buy border" >Buy Now</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="product-display-content border">
                    <div class="product-div">
                        <div class="product-img-div">
                            <div class="product-img">
                                <div class="display-img">
                                    <img src="images/car4.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="product-text-cont-div">
                            <ul>
                                <li><h3>2015 Tata Zest XM QJET 90PS ABS</h3></li>
                                <li><span style="color:grey;"><i class="fa-solid fa-location-dot"></i></span>&nbsp;&nbsp;&nbsp; <p><i class="fa-solid fa-calendar-days"></i> &nbsp;2022-09-21 16:24:26</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #FFD801;"><i class="fa-regular fa-heart"></i></span></li>
                                <li><h3>Price: </h3>&nbsp;&nbsp;
                                <span> &#x20B9; 2,95,000</span></li>
                                <li><hr class="product-hr"></li>
                                <li class="product-details-li">
                                    <ul>
                                        <li>
                                            <p class="bold">Reg. No:</p>
                                            <p>CH01BXXXX</p>
                                        </li>
                                        <li><div style="height: 100%; border: 1px solid black; opacity: 0.4;" ></div></li>
                                        <li>
                                            <p class="bold">Insurance Type:</p>
                                        </li>
                                        <li><div style="height: 100%; border: 1px solid black; opacity: 0.4;" ></div></li>
                                        <li>
                                            <p class="bold">Hub City:</p>
                                            <p>NOIDA</p>
                                        </li>
                                        <li>
                                            <div class="product-btn-div pc-mode">
                                                <button class="btn-offer border" >Make An Offer</button>
                                                <button class="btn-buy border" >Buy Now</button>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="product-btn-div tab-mode">
                                        <button class="btn-offer border" >Make An Offer</button>
                                        <button class="btn-buy border" >Buy Now</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="product-display-content border">
                    <div class="product-div">
                        <div class="product-img-div">
                            <div class="product-img">
                                <div class="display-img">
                                    <img src="images/car5.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="product-text-cont-div">
                            <ul>
                                <li><h3>2015 Tata Zest XM QJET 90PS ABS</h3></li>
                                <li><span style="color:grey;"><i class="fa-solid fa-location-dot"></i></span>&nbsp;&nbsp;&nbsp; <p><i class="fa-solid fa-calendar-days"></i> &nbsp;2022-09-21 16:24:26</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #FFD801;"><i class="fa-regular fa-heart"></i></span></li>
                                <li><h3>Price: </h3>&nbsp;&nbsp;
                                <span> &#x20B9; 2,95,000</span></li>
                                <li><hr class="product-hr"></li>
                                <li class="product-details-li">
                                    <ul>
                                        <li>
                                            <p class="bold">Reg. No:</p>
                                            <p>CH01BXXXX</p>
                                        </li>
                                        <li><div style="height: 100%; border: 1px solid black; opacity: 0.4;" ></div></li>
                                        <li>
                                            <p class="bold">Insurance Type:</p>
                                        </li>
                                        <li><div style="height: 100%; border: 1px solid black; opacity: 0.4;" ></div></li>
                                        <li>
                                            <p class="bold">Hub City:</p>
                                            <p>NOIDA</p>
                                        </li>
                                        <li>
                                            <div class="product-btn-div pc-mode">
                                                <button class="btn-offer border" >Make An Offer</button>
                                                <button class="btn-buy border" >Buy Now</button>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="product-btn-div tab-mode">
                                        <button class="btn-offer border" >Make An Offer</button>
                                        <button class="btn-buy border" >Buy Now</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="product-display-content border">
                    <div class="product-div">
                        <div class="product-img-div">
                            <div class="product-img">
                                <div class="display-img">
                                    <img src="images/car6.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="product-text-cont-div">
                            <ul>
                                <li><h3>2015 Tata Zest XM QJET 90PS ABS</h3></li>
                                <li><span style="color:grey;"><i class="fa-solid fa-location-dot"></i></span>&nbsp;&nbsp;&nbsp; <p><i class="fa-solid fa-calendar-days"></i> &nbsp;2022-09-21 16:24:26</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #FFD801;"><i class="fa-regular fa-heart"></i></span></li>
                                <li><h3>Price: </h3>&nbsp;&nbsp;
                                <span> &#x20B9; 2,95,000</span></li>
                                <li><hr class="product-hr"></li>
                                <li class="product-details-li">
                                    <ul>
                                        <li>
                                            <p class="bold">Reg. No:</p>
                                            <p>CH01BXXXX</p>
                                        </li>
                                        <li><div style="height: 100%; border: 1px solid black; opacity: 0.4;" ></div></li>
                                        <li>
                                            <p class="bold">Insurance Type:</p>
                                        </li>
                                        <li><div style="height: 100%; border: 1px solid black; opacity: 0.4;" ></div></li>
                                        <li>
                                            <p class="bold">Hub City:</p>
                                            <p>NOIDA</p>
                                        </li>
                                        <li>
                                            <div class="product-btn-div pc-mode">
                                                <button class="btn-offer border" >Make An Offer</button>
                                                <button class="btn-buy border" >Buy Now</button>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="product-btn-div tab-mode">
                                        <button class="btn-offer border" >Make An Offer</button>
                                        <button class="btn-buy border" >Buy Now</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function() {
        $('.product-filter-btn').click(function (e) { 
            e.preventDefault();
            
            $('.product-filters').slideToggle(800);
        });

        $('.product-filters a').click(function (e) { 
            e.preventDefault();
            
            
        });
    });
</script>