<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <a class="logo" href="<?php echo base_url(); ?>"><img src="<?php echo base_url($front_setting->logo); ?>" alt=""></a>
            </div><!--./col-md-4-->
            <div class="col-md-9 col-sm-12">
                <ul class="header-extras">
                    <li>
                        <i class="fa fa-envelope-o i-plain"></i>
                        <div class="he-text">
                            <?php echo $this->lang->line('email_us'); ?>
                            <span><a href="mailto:<?php echo $school_setting->email; ?>"><?php echo $school_setting->email; ?></a></span>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-phone i-plain"></i>
                        <div class="he-text">
                            <?php echo $this->lang->line('call_us'); ?>
                            <span><?php echo $school_setting->phone; ?></span>
                        </div>
                    </li>
                </ul>
            </div><!--./col-md-8-->
        </div><!--./row-->
    </div><!--./container-->
</header>

<style>
.header-extras {
    float: right;
    margin: 15px 0;
    padding: 0;
    list-style: none;
}

.header-extras li {
    float: left;
    margin-left: 30px;
    padding-left: 30px;
    border-left: 1px solid #EEE;
    height: 48px;
    display: flex;
    align-items: center;
}

.header-extras li:first-child {
    margin-left: 0;
    padding-left: 0;
    border-left: 0;
}

.header-extras li .i-plain {
    width: 48px;
    height: 48px;
    font-size: 28px;
    line-height: 48px;
    text-align: center;
    color: #1ABC9C;
    float: left;
    margin-right: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.header-extras .he-text {
    float: left;
    font-size: 14px;
    line-height: 1.3;
    color: #888;
    font-weight: 600;
}

.header-extras .he-text span {
    display: block;
    font-size: 12px;
    font-weight: 400;
    color: #1ABC9C;
}
</style>
<div class="header_menu">
    <div class="container">
        <div class="row">
            <nav class="navbar">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
                        <span class="sr-only"><?php echo $this->lang->line('toggle_navigation'); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-3">
                    <ul class="nav navbar-nav">
                        <?php
                        foreach ($main_menus as $menu_key => $menu_value) {
                            $submenus = false;
                            $cls_menu_dropdown = "";
                            $menu_selected = "";
                            if ($menu_value['page_slug'] == $active_menu) {
                                $menu_selected = "active";
                            }
                            if (!empty($menu_value['submenus'])) {
                                $submenus = true;
                                $cls_menu_dropdown = "dropdown";
                            }
                            if ($menu_value['menu'] == $active_menu) {
                                $menu_selected = "active";
                            }
                            ?>

                            <li class="<?php echo $menu_selected . " " . $cls_menu_dropdown; ?>" >
                                <?php
                                if (!$submenus) {
                                    $top_new_tab = '';
                                    $url = '#';
                                    if ($menu_value['open_new_tab']) {
                                        $top_new_tab = "target='_blank'";
                                    }
                                    if ($menu_value['ext_url']) {
                                        $url = $menu_value['ext_url_link'];
                                    } else {
                                        $url = site_url($menu_value['page_url']);
                                    }
                                    ?>

                                    <a href="<?php echo $url; ?>" <?php echo $top_new_tab; ?>><?php echo $menu_value['menu']; ?></a>

                                    <?php
                                } else {
                                    $child_new_tab = '';
                                    $url = '#';
                                    ?>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $menu_value['menu']; ?> <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <?php
                                        foreach ($menu_value['submenus'] as $submenu_key => $submenu_value) {
                                            if ($submenu_value['open_new_tab']) {
                                                $child_new_tab = "target='_blank'";
                                            }
                                            if ($submenu_value['ext_url']) {
                                                $url = $submenu_value['ext_url_link'];
                                            } else {
                                                $url = site_url($submenu_value['page_url']);
                                            }
                                            ?>
                                            <li><a href="<?php echo $url; ?>" <?php echo $child_new_tab; ?> ><?php echo $submenu_value['menu'] ?></a></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                    <?php
                                }
                                ?>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav><!-- /.navbar -->
        </div>
    </div>   
</div> 