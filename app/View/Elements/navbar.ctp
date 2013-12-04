<ul class="navbar">
		<li>
			<?php
				echo $this->Html->link('BYOMusic',array('controller' => 'Home', 'action' => 'index'));
			?>
		</li>
		<?php if(AuthComponent::user('username')): ?>
			<li>
				<?php if(strtoupper(AuthComponent::user('role'))=='BAND'): ?>
					<?php echo $this->Html->link(AuthComponent::user('username'),array(
						'controller' => 'bands',
						'action' => 'view',
						AuthComponent::user('id'))); 
					?>
				<?php elseif (strtoupper(AuthComponent::user('role'))=='MANAGER'): ?>
					<?php echo $this->Html->link(AuthComponent::user('username'),array('controller' => 'managers', 'action' => 'view',AuthComponent::user('id'))); ?>
				<?php endif ?>
			</li>
			<li class="accountButtons">
				<?php echo $this->Html->link('Log Out',array('controller' => 'users', 'action' => 'logout')); ?>
	        </li>
		<?php else: ?>
		<li class="floatRight">
			<ul>
					<li class="logInForm ">
						<?php echo $this->Form->create('User',array('url'=>array('controller'=>'Users','action'=>'logIn')));?>
			        	<?php echo $this->Form->input('username');?>	
					</li>	
					<li class="logInForm ">
				        <?php echo $this->Form->input('password');?>
					</li>
					<li class="logInForm">
						<?php echo $this->Form->end(__('Log In'));?>
					</li>
			</ul>
		</li>
			<li >	
				<?php echo $this->Html->link('Sign In',array('controller' => 'users', 'action' => 'add')); ?>
			</li>
		<?php endif ?>
	</ul>