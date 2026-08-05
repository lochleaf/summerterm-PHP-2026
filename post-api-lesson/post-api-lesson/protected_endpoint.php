<?php
/**
 * protected_endpoint.php
 * ---------------------------
 * Combining Week 11 authentication with today's POST handling.
 *
 * The same session check that guards a page in Week 11 now guards an
 * API endpoint. No valid session -> no write access, full stop.
 *
 * To test this locally you'd first need to be logged in (i.e. have
 * $_SESSION['user_id'] set by your Week 11 login script) in the same
 * browser session, then POST a JSON body like:
 *   { "bio": "Web dev student at Georgian College" }
 */
