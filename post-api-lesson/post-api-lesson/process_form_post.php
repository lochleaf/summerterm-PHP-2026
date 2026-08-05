<?php
/**
 * process_form_post.php
 * -------------------------
 * Reading form-encoded POST data.
 *
 * Talking points for class:
 *  - $_POST is auto-populated ONLY for application/x-www-form-urlencoded
 *    or multipart/form-data submissions (i.e. real HTML forms).
 *  - Always confirm REQUEST_METHOD before touching $_POST — a script
 *    that assumes POST will throw notices if visited directly with GET.
 *  - Use the null coalescing operator (??) so a missing field produces
 *    a controlled error instead of an "undefined array key" warning.
 */
