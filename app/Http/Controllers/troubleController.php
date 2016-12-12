<?php

namespace App\Http\Controllers;
use Client;
use blog;
use Illuminate\Http\Request;

class troubleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function tumblrAPI()
    {
           // Authenticate via OAuth
$client = new Tumblr\API\Client(
  'BxcCsVM8WvCSYCLgkuSd5h2whU4CnM2l1819kNZWq0NSaqLn7U',
  'Dj1dR7Z3Zm6bPQ5InKLM0J4XCIFuj448LF8UbJwkJ512qUvV0X',
  'fZM4BtXM5gXeTlu1ewmwbrUePEROgRRnuHYfoAHM41ogmgZvy0',
  'YSJxLpjkg5jDPACisgoFjcNGUsjFg9VTylQ9NuVSTx7AOH7QXs'
);

// Make the request
$client->getSubmissionPosts('bus-trouble.tumblr.com');

dd(SubmissionPosts);

        return view('trouble');
    }
}
