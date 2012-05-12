<?php
/*
* SiteSense
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@sitesense.org so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade SiteSense to newer
* versions in the future. If you wish to customize SiteSense for your
* needs please refer to http://www.sitesense.org for more information.
*
* @author     Full Ambit Media, LLC <pr@fullambit.com>
* @copyright  Copyright (c) 2011 Full Ambit Media, LLC (http://www.fullambit.com)
* @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/
function blogs_loadPermissions($data) {
    $data->permissions['blogs']=array(
        'access'              => 'Blog access',
        'accessOthers'        => 'Manage content of others',

        'blogAdd'             => 'Add blogs',
        'blogEdit'            => 'Edit blogs',
        'blogDelete'          => 'Delete blogs',
        'blogList'            => 'View blogs',

        'categoryAdd'         => 'Add categories',
        'categoryEdit'        => 'Edit categories',
        'categoryDelete'      => 'Delete categories',
        'categoryView'        => 'View categories',

        'commentAdd'          => 'Add comments',
        'commentEdit'         => 'Edit comments',
        'commentDelete'       => 'Delete comments',
        'commentApprove'      => 'Approve comments',
        'commentDisapprove'   => 'Disapprove comments',
        'commentList'         => 'List comments',

        'postAdd'             => 'Add posts',
        'postEdit'            => 'Edit posts',
        'postDelete'          => 'Delete posts',
        'postView'            => 'View posts',

        //----
        'blogsManage'          => 'Manage blogs',
        'blogsViewOthers'      => 'View other user\'s blogs',
        'categoryAdd'          => 'Add blog category',
        'categoryDelete'       => 'Delete categories',
        'commentsApprove'      => 'Approve comments',
        'commentsDisapprove'   => 'Disapprove comments',
        'commentsList'         => 'List comments',
        'commentsEdit'         => 'Edit comments',
        'commentsDelete'       => 'Remove comments',
        'ownerAdd'             => 'Add blog owner',
        'ownerDelete'          => 'Remove blog owners',
        'ownerView'            => 'View blog owners',
        'postAdd'              => 'Add blog post',
        'postEdit'             => 'Edit blog posts',

        'blogsEdit' => 'User can view this speicifc blog',
        'canEditBlogCategory' => 'User can modify the blog category',


        'canListBlogPosts' => 'User can list their own blog posts',
        'canListOthersBlogPosts' => 'User can list others blog posts along with their own',
        'canListBlogCategory' => 'User can list a blogs categories',

        'canListBlogPosts' => 'User can list blogs posts'
    );
}
?>