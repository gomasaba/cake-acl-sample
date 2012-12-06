<?php echo $this->Form->create();?>

	<?php
		//メールアドレス
		echo $this->Html->tag('div',
			$this->Form->label('email','メールアドレス') .
			$this->Form->input('email',array(
				'label'=>false,
				'error'=>false,
			)) 
		);
		//パスワード
		echo $this->Html->tag('div',
			$this->Form->label('password','パスワード') .
			$this->Form->input('password',array(
				'label'=>false,
				'error'=>false,
			)) 
		);

	?>
	<div class="center" style="margin:10px;">
	<?php echo $this->Form->submit('ログイン',array('class'=>'ym-button'))?>
	</div>
<?php echo $this->Form->end();?>
