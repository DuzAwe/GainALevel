
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Foundation 4</title>

  <link rel="stylesheet" href="stylesheets/normalize.css" />
  
  <link rel="stylesheet" href="stylesheets/app.css" />
  

  <script src="javascripts/vendor/custom.modernizr.js"></script>

</head>
<body>

	<div class="row">
    <div class="large-12 columns">
 
      <!-- Navigation -->
 
        <ul class="button-group">
          <li><a href="#" class="button">Nav Item 1</a></li>
          <li><a href="#" class="button">Nav Item 2</a></li>
          <li><a href="#" class="button">Nav Item 3</a></li>
        </ul>
 
      <!-- End Navigation -->
 
 
      <!-- Header Content -->
 
        <div class="row">
 
          <div class="large-6 columns">
 
            <img src="http://placehold.it/500x500&text=Image"><br>
 
          </div>
 
 
          <div class="large-6 columns">
 
            <h3 class="show-for-small">Header<hr/></h3>
 
            <div class="panel">
              <h4 class="hide-for-small">Header<hr/></h4>
            <h5 class="subheader">

		<?php echo $this->Html->link('Add Post', array('controller' => 'posts', 'action' => 'add')); ?>

		<table>
			<tr>
				<th>Id</th>
				<th>Title</th>
				<th>Actions</th>
				<th>Created</th>
				<th>Modified</th>
			</tr>
		
			<?php foreach ($posts as $post): ?>
		
			<tr>
				<td><?php echo $post['Post']['id']; ?></td>
				<td>
					<?php 
						echo $this->Html->link(
							$post['Post']['title'], 
							array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])
						); 
					?>
				</td>
				<td>
					<?php 
						echo $this->Html->link(
							'Edit', array('action' => 'edit', $post['Post']['id'])
						); 
					?>
					</br>
					<?php 
						echo $this->Form->postLink(
							'Delete', 
							array('action' => 'delete', $post['Post']['id']),
							array('confirm' =>'Are you sure?')
						);
					?>
				</td>
				<td><?php echo $post['Post']['created']; ?></td>
				<td><?php echo $post['Post']['modified']; ?></td>
			</tr>
		
			<?php endforeach;?>
		
		</table>

	   </h5>

      	</div>
 
          <div class="row">
              <div class="large-6 small-6 columns">
                <div class="panel">
                  <h5>Header</h5>
                <h6 class="subheader">Praesent placerat dui tincidunt elit suscipit sed.</h6>
                <a href="#" class="small button">BUTTON TIME!</a>
                </div>
              </div>
 
              <div class="large-6 small-6 columns">
                <div class="panel">
                  <h5>Header</h5>
                <h6 class="subheader">Praesent placerat dui tincidunt elit suscipit sed.</h6>
                <a href="#" class="small button">BUTTON TIME!</a>
                </div>
              </div>
          </div>
 
          </div>
 
        </div>
 
      <!-- End Header Content -->
 
 
      <!-- Search Bar -->
 
        <div class="row">
 
          <div class="large-12 columns">
            <div class="radius panel">
 
            <form>
              <div class="row collapse">
 
                <div class="large-10 small-8 columns">
                  <input type="text" />
                </div>
 
                <div class="large-2 small-3 columns">
                  <a href="#" class="postfix button expand">Search</a>
                </div>
 
              </div>
            </form>
 
          </div>
          </div>
 
        </div>
 
      <!-- End Search Bar -->
 
 
      <!-- Thumbnails -->
 
        <div class="row">
 
          <div class="large-12 show-for-small columns">
          <h3>Header</h3><hr>
        </div>
 
          <div class="large-3 small-6 columns">
            <img src="http://placehold.it/500x500&text=Thumbnail">
            <div class="panel">
              <p>Description</p>
            </div>
          </div>
 
          <div class="large-3 small-6 columns">
            <img src="http://placehold.it/500x500&text=Thumbnail">
            <div class="panel">
              <p>Description</p>
            </div>
          </div>
 
          <div class="large-3 small-6 columns">
            <img src="http://placehold.it/500x500&text=Thumbnail">
            <div class="panel">
              <p>Description</p>
            </div>
          </div>
 
          <div class="large-3 small-6 columns">
            <img src="http://placehold.it/500x500&text=Thumbnail">
            <div class="panel">
              <p>Description</p>
            </div>
          </div>
 
        </div>
 
      <!-- End Thumbnails -->
 
 
      <!-- Footer -->
 
        <footer class="row">
        <div class="large-12 columns"><hr />
            <div class="row">
 
              <div class="large-6 columns">
                  <p>© Copyright no one at all. Go to town.</p>
              </div>
 
              <div class="large-6 columns">
                  <ul class="inline-list right">
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
                  </ul>
              </div>
 
            </div>
        </div>
      </footer>
 
      <!-- End Footer -->
 
 
    </div>
  </div></body>
</html>