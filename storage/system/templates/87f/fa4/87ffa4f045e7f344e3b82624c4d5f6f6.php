<div id="local-box" class="local-box-fluid">
    <div class="row">
        <div class="col col-md-12" style="margin-left:40%;margin-top:16px;margin-bottom:16px;color:white;font-size: 1.75rem;">
            <h2 style="color:white">ABOUT US</h2>        
    </div>
</div>
    <div class="row">
        <div class="col-md-6">
            <img src="./extensions/igniter/local/assets/download.jpg" alt="" width="100%">
        </div>
        <div class="col-md-6 p-5">
            <h2 class="text-white m-t-5">WELCOME TO ORDER PAY</h2>
            <p class="text-white m-t-5" style="font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;">Do you want to have a fine dinner with your friends, in that favourite restaurant of the mere thought

of waiting in that long queue gets you? Do you then intend to plan for a perfect dinner with all the

uncertainties in the world?

Then OrderPay is the right place for you. Your one source destination for all table booking

OrderPAY is your one source destination for all restaurants and bar table booking. OrderPAY gives

you the ultimate Uber experience from ordering your meals and drinks online to paying it before you

attend your reservation; get straight to the point..</p>
        </div>
    </div>

    <!-- <div class="panel panel-local local-search">
        <div class="panel-body">
            <h2 class="text-center"><?= lang('igniter.local::default.text_order_summary'); ?></h2>
            <span class="search-label sr-only"><?= lang('igniter.local::default.label_search_query'); ?></span>
            <?php if ($hideSearch) { ?>
                <a class="btn btn-block btn-primary"
                   href="<?= restaurant_url($menusPage); ?>"><?= lang('igniter.local::default.text_find'); ?></a>
            <?php }
            else { ?>
                <form
                    id="location-search"
                    method="POST"
                    role="form"
                    data-request="<?= $searchEventHandler; ?>"
                >
                    <div class="input-group postcode-group">
                        <input
                            type="text"
                            id="search-query"
                            class="form-control text-center postcode-control"
                            name="search_query"
                            placeholder="<?= lang('igniter.local::default.label_search_query'); ?>"
                            value="<?= $location->userPosition()->format(); ?>"
                        >
                        <div class="input-group-btn">
                            <button
                                type="button"
                                class="btn btn-primary"
                                data-control="search-local"
                            ><?= lang('igniter.local::default.text_find'); ?></button>
                        </div>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div> -->
</div>

