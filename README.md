# PHP Default Argument Evaluation Bug

This repository demonstrates a subtle bug in PHP related to the evaluation of default argument values.  PHP evaluates default arguments only once, when the function is defined, not each time the function is called. This can lead to unexpected behavior when the default argument is mutable (e.g., an array or an object).

**Bug:** The `my_function` in `bug.php` shows that modifying the default argument in one call affects subsequent calls.

**Solution:** The `bugSolution.php` provides a corrected version to avoid this issue.