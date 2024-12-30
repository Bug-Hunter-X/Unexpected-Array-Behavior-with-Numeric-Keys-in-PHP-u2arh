# PHP Array Increment Bug
This repository demonstrates a subtle bug related to incrementing array values in PHP when using integer keys.  The issue stems from PHP's implicit type conversion and how it handles the absence of a key.

The `bug.php` file contains code illustrating the problem. The `bugSolution.php` file provides a solution for consistent behavior.