<div class="box dark">
    <header>
        <div class="icons"><i class="icon-cloud-download"></i></div>
        <h5><?php echo __('Import game');?></h5>
    </header>
    <div class="accordion-body body in collapse">
            <div class="alert alert-info">
                <h4><i class="icon-info-sign"></i> <?php echo __('What is that ?');?></h4>
                <p><?php echo __('MushRaider can import games data from the RaidHead.com API');?></p>
                <p><?php echo __('RaidHead.com API supports many games, the import system allows you to add a new game (and keep it up to date) in just one click !');?></p>
            </div>

            <div class="importForm">
                <div class="form-group">
                    <?php echo $this->Form->input('Game.slug', array('type' => 'select', 'required' => true, 'label' => __('Select a game to import'), 'options' => $gamesList, 'empty' => '', 'class' => 'span5'));?>
                </div>
                <button class="btn btn-success pull-right" id="importGame"><?php echo __('Import');?></button>
            </div>

            <div id="progressBar">
                <?php echo __('Please wait while MushRaider is importing the game');?>
                <div class="progress progress-striped active">
                    <span></span>
                    <div class="bar"></div>
                </div>
            </div>
    </div>
</div>