<div class="sidebar">
   <!--  <ul>
        <li <?= $this->app->checkMenuSelection('DashboardController', 'show') ?>>
            <?= $this->url->link(t('Overview'), 'DashboardController', 'show', array('user_id' => $user['id'])) ?>
        </li>
        <li <?= $this->app->checkMenuSelection('DashboardController', 'projects') ?>>
            <?= $this->url->link(t('My projects'), 'DashboardController', 'projects', array('user_id' => $user['id'])) ?>
        </li>
        <li <?= $this->app->checkMenuSelection('DashboardController', 'tasks') ?>>
            <?= $this->url->link(t('My tasks'), 'DashboardController', 'tasks', array('user_id' => $user['id'])) ?>
        </li>
        <li <?= $this->app->checkMenuSelection('DashboardController', 'subtasks') ?>>
            <?= $this->url->link(t('My subtasks'), 'DashboardController', 'subtasks', array('user_id' => $user['id'])) ?>
        </li>
        <?= $this->hook->render('template:dashboard:sidebar', array('user' => $user)) ?>
    </ul>
 -->
    <!-- Navigation -->
    <nav class="navbar left_navigation" role="navigation">
        <div class="search_field">
            <input type="text" name="search" id="form-search" class="input-addon-field form-control" placeholder="Search">
        </div>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa"></i>Project_Innov <i class="fa fa-fw fa-folder pull-left"></i></a>
                    <ul id="submenu-1" class="collapse">
                        <li><a href="#" data-toggle="collapse" data-target="#submenu-a">
                        <i class="fa"></i>Tasks <i class="fa fa-fw fa-folder pull-left"></i></a>
                            <ul id="submenu-a" class="collapse">
                                <li><a href="#"><i class="fa fa-caret-down"></i> Task</a></li>
                                <li><a href="#"><i class="fa fa-caret-down"></i> Task</a></li>
                            </ul>
                        </li>

                        <li><a href="#" data-toggle="collapse" data-target="#submenu-II">
                        <i class="fa"></i>Tasks <i class="fa fa-fw fa-folder pull-left"></i></a>
                            <ul id="submenu-II" class="collapse">
                                <li><a href="#"><i class="fa fa-caret-down"></i> Task</a></li>
                                <li><a href="#"><i class="fa fa-caret-down"></i> Task</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa"></i>Project_Next <i class="fa fa-fw fa-folder pull-left"></i></a>
                    <ul id="submenu-2" class="collapse">
                        <li><a href="#" data-toggle="collapse" data-target="#submenu-b">
                        <i class="fa"></i>Tasks <i class="fa fa-fw fa-folder pull-left"></i></a>
                            <ul id="submenu-b" class="collapse">
                                <li><a href="#"><i class="fa fa-caret-down"></i> Task</a></li>
                                <li><a href="#"><i class="fa fa-caret-down"></i> Task</a></li>
                            </ul>
                        </li>

                        <li><a href="#" data-toggle="collapse" data-target="#submenu-III">
                        <i class="fa"></i>Tasks <i class="fa fa-fw fa-folder pull-left"></i></a>
                            <ul id="submenu-III" class="collapse">
                                <li><a href="#"><i class="fa fa-caret-down"></i> Task</a></li>
                                <li><a href="#"><i class="fa fa-caret-down"></i> Task</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

</div>
