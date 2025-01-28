# PHP - Unexpected Array Modification

This repository demonstrates a subtle bug in PHP related to array modification during a foreach loop. The bug involves unexpected behavior when processing array values and converting strings to lowercase.

## Bug Description
The bug is demonstrated in the `bug.php` file. The `processData` function intends to modify the input array by converting string values to lowercase. However, the modification might lead to unexpected results or data loss in certain situations.

## Solution
The `bugSolution.php` file provides a corrected version of the code that addresses the described behavior.