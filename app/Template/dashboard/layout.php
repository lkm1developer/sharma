<section id="main">
    
    <section class="content_part sidebar-container" id="dashboard">
        <?= $this->render($sidebar_template, array('user' => $user)) ?>
        <div class="sidebar-content">
        <div class="page-header">
        <ul>
            <?php if ($this->user->hasAccess('ProjectCreationController', 'create')): ?>
                <li>
                    <?= $this->modal->medium('plus', t('New project'), 'ProjectCreationController', 'create') ?>
                </li>
            <?php endif ?>
            <?php if ($this->app->config('disable_private_project', 0) == 0): ?>
                <li>
                    <?= $this->modal->medium('lock', t('New private project'), 'ProjectCreationController', 'createPrivate') ?>
                </li>
            <?php endif ?>
           

           <li>
               <a href="#"><i class="fa fa-user"></i>User Overview</a> </li>
            <?= $this->hook->render('template:dashboard:page-header:menu', array('user' => $user)) ?>
            </ul>

    </div>
            

            <div class="btn_bar">
                <a href="#" class="btn">Back Log</a> 
                <a href="#" class="btn">Ready</a> 
                <a href="#" class="btn">In Progress</a> 
                <a href="#" class="btn">Done</a> 
                <a href="#" class="btn">Analytics</a>
            </div>
        </div>
    </section>
</section>
