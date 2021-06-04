### Test Extension to evaluate DI when xclassing an extbase controller

The extension xclassed `TYPO3\CMS\Belog\Controller\BackendLogController` and
tries to add an additional dependeny using controller DI.

In the current state, it is not possible to open the BE log module any more,
since DI for `TYPO3\CMS\Belog\Controller\BackendLogController` only has 3
arguments but the xclassed version expects 4.

### Update - 04.06.2021

Thanks to @lukasniestroj for pointing out the solution of the problem.
