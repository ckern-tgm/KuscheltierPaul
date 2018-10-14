<?php
function connect(){

    //Establish username and password for bucket access
    $authenticator = new \Couchbase\PasswordAuthenticator();
    $authenticator ->username('uname')->password('pword');

    //Connect to Couchbase Server
    $cluster = new CouchbaseCluster("couchbase://127.0.0.1"); //placeholder string

    //Authenticate
    $cluster->authenticate($authenticator);
    $bucket = $cluster->openBucket("bucket-name");
}
?>