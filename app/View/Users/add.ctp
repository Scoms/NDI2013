<div class="users form">
<?php echo $this->Form->create('User');?>
    <fieldset id="signIn">
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('email');
    ?>
	<?php echo $this->Form->end(__('Sign In'));?>
    </fieldset>
</div>