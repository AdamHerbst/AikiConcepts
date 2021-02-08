<!--/**************************************************************************
* Copyright 2020 Adam Herbst*
* *
* Licensed under the Apache License, Version 2.0 (the "License"); *
* you may not use this file except in compliance with the License. *
* You may obtain a copy of the License at *
* *
* http://www.apache.org/licenses/LICENSE-2.0 *
* *
* Unless required by applicable law or agreed to in writing, software *
* distributed under the License is distributed on an "AS IS" BASIS, *
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.*
* See the License for the specific language governing permissions and *
* limitations under the License. *
**************************************************************************/ -->

<!-- Makes calls for various aspects of the commenting system -->
<div class="comments">
  <h2>Comments</h2>
  <?php $args = array(
      'walker' => null,
      'max_depth' => '',
      'style' => 'ul',
      'callback' => null,
      'end-callback' => null,
      'type' => 'all',
      'reply_text' => 'Reply',
      'page' => '',
      'per_page' => '',
      'avatar_size' => 80,
      'reverse_top_level' => null,
      'reverse_children' => '',
      'format' => 'html5', // or 'xhtml' if no 'HTML5' theme support
      'short_ping' => false, // @since 3.6
      'echo' => true // boolean, default is true
  ); ?>

<?php
wp_list_comments($args, $comments);

$comments_args = array(
    'label_submit' => 'Send',
    'title_reply' => 'Write a Reply or Comment',
    'comment_notes_after' => '',
    'comment_field' =>
        '<p class="comment-form-comment"><label for="comment">' .
        _x('Comment', 'noun') .
        '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>'
);

comment_form($comments_args);
?>
</div>
