<div id="local-box" class="local-box-fluid">
    <div class="row">
        <div class="col-md-6">
            <img src="./extensions/igniter/local/assets/download.jpg" alt="" width="100%">
        </div>
        <div class="col-md-6 p-5">
            <h2 class="text-white m-t-5">WELCOME TO ORDER PAY PRODUCTION</h2>
            <p class="text-white m-t-5" style="font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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

