hello
hi
use Exception;

use MongoDB\Client;

$uri = mongodb+srv://praveensubramanibca:QERuT5en8hnGuxPj@cluster0.5ulr1mm.mongodb.net/?retryWrites=true&w=majority;

// Create a new client and connect to the server

$client = new MongoDB\Client($uri);

try {

    // Send a ping to confirm a successful connection

    $client->selectDatabase('admin')->command(['ping' => 1]);

    echo "Pinged your deployment. You successfully connected to MongoDB!\n";

} catch (Exception $e) {

    printf($e->getMessage());

}
