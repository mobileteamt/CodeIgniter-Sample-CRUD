<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Title</strong></td>
        <td><strong>Content</strong></td>
        <td><strong>Action</strong></td>
    </tr>
<?php foreach ($posts as $posts_item): ?>
        <tr>
            <td><?php echo $posts_item['title']; ?></td>
            <td><?php echo $posts_item['text']; ?></td>
            <td>
                <a href="<?php echo site_url('posts/'.$posts_item['slug']); ?>">View</a> | 
                <a href="<?php echo site_url('posts/edit/'.$posts_item['id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('posts/delete/'.$posts_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
