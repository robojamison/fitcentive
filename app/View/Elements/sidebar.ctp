<ul class="side-nav fixed grey darken-1">
    <!-- Logo -->
    <li id="logo">
        <?php echo $this->Html->link($this->Html->image('logo.png'), '/', array('escape' => false)); ?>
    </li>

    <!-- Quick links -->
    <li class="bold">
        <i class="mdi-action-dashboard small grey-text text-lighten-1"></i>
        <?php echo $this->Html->link('Dashboard', '/users/dashboard', array('class' => 'white-text')); ?>
    </li>

    <li class="bold">
        <i class="mdi-action-account-circle small grey-text text-lighten-1"></i>
        <?php echo $this->Html->link('My Account', '/users/account', array('class' => 'white-text')); ?>
    </li>

    <li class="bold">
        <i class="mdi-action-list small grey-text text-lighten-1"></i>
        <?php echo $this->Html->link('Newsfeed', 'javascript:void(0);', array('class' => 'white-text')); ?>
    </li>

    <!-- Action links -->
    <li>
        <i class="mdi-action-done-all small grey-text text-lighten-1"></i>
        <?php echo $this->Html->link('Goals', '/goals/manage', array('class' => 'white-text')); ?>
    </li>

    <li>
        <i class="mdi-maps-local-restaurant small grey-text text-lighten-1"></i>
        <?php echo $this->Html->link('Food', '/intakes/manage', array('class' => 'white-text')); ?>
    </li>

    <li>
        <i class="mdi-maps-directions-bike small grey-text text-lighten-1"></i>
        <?php echo $this->Html->link('Exercise', '/outputs/manage', array('class' => 'white-text')); ?>
    </li>

    <li>
        <i class="mdi-maps-pin-drop small grey-text text-lighten-1"></i>
        <?php echo $this->Html->link('Events', 'javascript:void(0);', array('class' => 'white-text')); ?>
    </li>

    <li>
        <i class="mdi-maps-local-play small grey-text text-lighten-1"></i>
        <?php echo $this->Html->link('Deals', '/deals/browse', array('class' => 'white-text')); ?>
    </li>

    <!-- Other links -->
    <li class="bold">
        <i class="mdi-action-bug-report small grey-text text-lighten-1"></i>
        <?php echo $this->Html->link('Report Bug', 'javascript:void(0);', array('class' => 'white-text')); ?>
    </li>

    <li class="bold">
        <i class="mdi-action-settings small grey-text text-lighten-1"></i>
        <?php echo $this->Html->link('Preferences', 'javascript:void(0);', array('class' => 'white-text')); ?>
    </li>

    <li class="bold">
        <i class="mdi-action-help small grey-text text-lighten-1"></i>
        <?php echo $this->Html->link('Help & Support', 'javascript:void(0);', array('class' => 'white-text')); ?>
    </li>
</ul>