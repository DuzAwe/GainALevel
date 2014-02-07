<?php
echo $this->Form->create('User');
echo $this->Form->input('password');
echo $this->Form->input('firstname');
echo $this->Form->input('lastname');
echo $this->Form->end('Next step');
?>