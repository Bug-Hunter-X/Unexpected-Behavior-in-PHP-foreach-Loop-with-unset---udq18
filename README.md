# PHP Foreach Loop with unset() Issue

This repository demonstrates a subtle but important issue that can arise when using the `unset()` function within a `foreach` loop in PHP.  Incorrect usage can lead to unexpected behavior and skipped elements in the array being iterated over.

The example code illustrates this issue.  The `bug.php` file shows the problem, and the solution is shown in `bugSolution.php`.

## How to Reproduce

Clone the repository and run `bug.php`. You'll observe that not all elements are processed as expected due to the modification of the array within the loop. 