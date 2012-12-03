/**
 * This file is part of the FOSCommentBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

!function ($) {
    "use strict";

    $(document).on('fos_comment_show_reply', function (e) {
        var target = $(e.target).find('.fos_comment_comments:first');
        e.params.replacementCallback = function (data) {
            target.prepend(data);
        }
    });

}(window.jQuery);