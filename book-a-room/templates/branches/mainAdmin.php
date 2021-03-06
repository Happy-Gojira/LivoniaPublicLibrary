<link href="<?php echo plugins_url(); ?>/book-a-room/css/bookaroom_meetings.css" rel="stylesheet" type="text/css"/>
<div class=wrap>
	<div id="icon-options-general" class="icon32"></div>
	<h2>
		<?php _e( 'Book a Room Administration - Branches', 'book-a-room' ); ?>
	</h2>
</div>
<?php
# Display Errors if there are any
if ( !empty( $errorMSG ) ) {
	?>
	<p>
		<h3 style="color: red;"><strong><?php echo $errorMSG; ?></strong></h3>
	</p>
	<?php
}
?>
<h2>
	<?php _e( 'New branch', 'book-a-room' ); ?>
</h2>
<p>
	<a href="?page=bookaroom_Settings_Branches&amp;action=add">
		<?php _e( 'Create a new branch.', 'book-a-room' ); ?>
	</a>
</p>
<p>&nbsp;</p>
<h2>
	<?php _e( 'Current Branches', 'book-a-room' ); ?>
</h2>
<?php 
if ( is_null( $branchList ) ) {
?>
<p>
	<?php _e( 'There are currently no branches.', 'book-a-room' ); ?>
</p>

<?php
} else {
	?>
	<table class="tableMain">
		<tr>
			<td>
				<?php _e( 'Branch Name', 'book-a-room' ); ?>
			</td>
			<td>
				<?php _e( 'Actions', 'book-a-room' ); ?>
			</td>
		</tr>
		<?php 
		foreach ( $branchList as $key => $val ) {
		?>
		<tr>
			<td>
				<?php echo $val; ?>
			</td>
			<td width="100" align="right">
				<a href="?page=bookaroom_Settings_Branches&amp;branchID=<?php echo $key; ?>&amp;action=edit">
					<?php _e( 'Edit', 'book-a-room' ); ?>
				</a> |
				<a href="?page=bookaroom_Settings_Branches&amp;branchID=<?php echo $key; ?>&amp;action=delete">
					<?php _e( 'Delete', 'book-a-room' ); ?>
				</a>
			</td>
		</tr>
		<?php 
		}
		?>
	</table> 
	<?php
}
?>