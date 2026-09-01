Lab Activity 3
Detail Pages, Route Parameters and Order

-Q1
I placed the featured route above the detail route because Laravel checks routes from top to bottom. If the detail route were placed first, visiting /subjects/featured would lead to a '404 error, as it would look for a subject with the ID "featured," which does not exist. Specific routes must precede general parameter routes.


-Q2
To enhance security, a clean 404 Not Found page is shown instead of displaying PHP errors with file paths when a non-existent ID is accessed. A check with isset() is employed to verify the ID's presence, and if it is absent, abort(404) is triggered to return the "not found" page without revealing system information.

-Q3
Using route names allows for automatic updates of links when URL paths in the routes file change, preventing 404 errors that occur from hard-coded URLs, which would require manual updates on each page.