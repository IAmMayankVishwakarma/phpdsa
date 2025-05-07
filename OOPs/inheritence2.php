<?php
class Book {
    /* Member variables */
    protected int $price;
    protected string $title;

    // Constructor to initialize book details
    public function __construct(string $title, int $price) {
        $this->title = $title;
        $this->price = $price;
    }

    public function dispBook() {
        echo "Title: $this->title \nPrice: $this->price \n";
    }
}

class Ebook extends Book {
    private string $format;

    // Constructor to initialize ebook details
    public function __construct(string $title, int $price, string $format) {
        parent::__construct($title, $price);
        $this->format = $format;
    }

    public function dispEbook() {
        echo "Title: $this->title \nPrice: $this->price\n";
        echo "Format: $this->format \n";
    }
}

// Creating an ebook object
$eb = new Ebook("PHP Fundamentals", 450, "EPUB");
$eb->dispEbook();
?>
  