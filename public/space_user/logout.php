<?php
session_start ();
session_unset ();
session_destroy ();
header ('location: /projets/exodus/index.php');
