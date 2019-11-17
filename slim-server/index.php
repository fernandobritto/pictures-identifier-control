<?php
/**
 * Produkt Katalog
 * @version 1.0.1
 */

require_once __DIR__ . '/vendor/autoload.php';

$app = new Slim\App();


/**
 * POST addproduct
 * Summary: Add a new product to the store
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
$app->POST('/v2/product', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing addproduct as a POST method ?');
            return $response;
            });


/**
 * DELETE deleteproduct
 * Summary: Deletes a product
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
$app->DELETE('/v2/product/{productId}', function($request, $response, $args) {
            $headers = $request->getHeaders();
            
            
            
            $response->write('How about implementing deleteproduct as a DELETE method ?');
            return $response;
            });


/**
 * GET findproductsByStatus
 * Summary: Finds products by status
 * Notes: Multiple status values can be provided with comma separated strings
 * Output-Formats: [application/xml, application/json]
 */
$app->GET('/v2/product/findByStatus', function($request, $response, $args) {
            
            $queryParams = $request->getQueryParams();
            $status = $queryParams['status'];    
            
            
            $response->write('How about implementing findproductsByStatus as a GET method ?');
            return $response;
            });


/**
 * GET findproductsByTags
 * Summary: Finds products by tags
 * Notes: Muliple tags can be provided with comma separated strings. Use         tag1, tag2, tag3 for testing.
 * Output-Formats: [application/xml, application/json]
 */
$app->GET('/v2/product/findByTags', function($request, $response, $args) {
            
            $queryParams = $request->getQueryParams();
            $tags = $queryParams['tags'];    
            
            
            $response->write('How about implementing findproductsByTags as a GET method ?');
            return $response;
            });


/**
 * GET getproductById
 * Summary: Find product by ID
 * Notes: Returns a single product
 * Output-Formats: [application/xml, application/json]
 */
$app->GET('/v2/product/{productId}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getproductById as a GET method ?');
            return $response;
            });


/**
 * PUT updateproduct
 * Summary: Update an existing product
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
$app->PUT('/v2/product', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing updateproduct as a PUT method ?');
            return $response;
            });


/**
 * POST updateproductWithForm
 * Summary: Updates a product in the store with form data
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
$app->POST('/v2/product/{productId}', function($request, $response, $args) {
            
            
            $name = $args['name'];    $status = $args['status'];    
            
            $response->write('How about implementing updateproductWithForm as a POST method ?');
            return $response;
            });


/**
 * POST uploadFile
 * Summary: uploads an image
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->POST('/v2/product/{productId}/uploadImage', function($request, $response, $args) {
            
            
            $additionalMetadata = $args['additionalMetadata'];    $file = $args['file'];    
            
            $response->write('How about implementing uploadFile as a POST method ?');
            return $response;
            });


/**
 * DELETE deleteOrder
 * Summary: Delete purchase order by ID
 * Notes: For valid response try integer IDs with positive integer value.         Negative or non-integer values will generate API errors
 * Output-Formats: [application/xml, application/json]
 */
$app->DELETE('/v2/store/order/{orderId}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing deleteOrder as a DELETE method ?');
            return $response;
            });


/**
 * GET getInventory
 * Summary: Returns product inventories by status
 * Notes: Returns a map of status codes to quantities
 * Output-Formats: [application/json]
 */
$app->GET('/v2/store/inventory', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getInventory as a GET method ?');
            return $response;
            });


/**
 * GET getOrderById
 * Summary: Find purchase order by ID
 * Notes: For valid response try integer IDs with value &gt;&#x3D; 1 and &lt;&#x3D; 10.         Other values will generated exceptions
 * Output-Formats: [application/xml, application/json]
 */
$app->GET('/v2/store/order/{orderId}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getOrderById as a GET method ?');
            return $response;
            });


/**
 * POST placeOrder
 * Summary: Place an order for a product
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
$app->POST('/v2/store/order', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing placeOrder as a POST method ?');
            return $response;
            });


/**
 * POST createUser
 * Summary: Create user
 * Notes: This can only be done by the logged in user.
 * Output-Formats: [application/xml, application/json]
 */
$app->POST('/v2/user', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing createUser as a POST method ?');
            return $response;
            });


/**
 * POST createUsersWithArrayInput
 * Summary: Creates list of users with given input array
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
$app->POST('/v2/user/createWithArray', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing createUsersWithArrayInput as a POST method ?');
            return $response;
            });


/**
 * POST createUsersWithListInput
 * Summary: Creates list of users with given input array
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
$app->POST('/v2/user/createWithList', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing createUsersWithListInput as a POST method ?');
            return $response;
            });


/**
 * DELETE deleteUser
 * Summary: Delete user
 * Notes: This can only be done by the logged in user.
 * Output-Formats: [application/xml, application/json]
 */
$app->DELETE('/v2/user/{username}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing deleteUser as a DELETE method ?');
            return $response;
            });


/**
 * GET getUserByName
 * Summary: Get user by user name
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
$app->GET('/v2/user/{username}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getUserByName as a GET method ?');
            return $response;
            });


/**
 * GET loginUser
 * Summary: Logs user into the system
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
$app->GET('/v2/user/login', function($request, $response, $args) {
            
            $queryParams = $request->getQueryParams();
            $username = $queryParams['username'];    $password = $queryParams['password'];    
            
            
            $response->write('How about implementing loginUser as a GET method ?');
            return $response;
            });


/**
 * GET logoutUser
 * Summary: Logs out current logged in user session
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
$app->GET('/v2/user/logout', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing logoutUser as a GET method ?');
            return $response;
            });


/**
 * PUT updateUser
 * Summary: Updated user
 * Notes: This can only be done by the logged in user.
 * Output-Formats: [application/xml, application/json]
 */
$app->PUT('/v2/user/{username}', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing updateUser as a PUT method ?');
            return $response;
            });



$app->run();
