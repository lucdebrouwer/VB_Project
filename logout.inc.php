<?php 
session_start();
// Remove all session variables
session_unset();

// Destroy all sessions
session_destroy();