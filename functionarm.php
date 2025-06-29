<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function d'Armstrong</title>
</head>
<body>
    <?php
    class Book
    {
        private $isbn;
        private $titrre;
        private $auteur;
        private $categorie;
        private $image;
        public function __costruction($isbn,$titrre,$auteur,$categorie,$image)
        {
            $this->isbn = $isbn;
            $this->titrre = $titrre;
            $this->auteur = $auteur;
            $this->categorie = $categorie;
            $this->image = $image;
        }
    }
    public function display()
    {
        $str="";
        $str .="ISBN: ".$this->isbn."<br>";
        $str .="Titre: ".$this->titre."<br>";
        $str .="Auteur: ".$this->auteur."<br>";
        $str .="Categorie: ".$this->categorie."<br>";
        $str .="Image: <img height='100' width='100' src='$this->image'>">
        return $str;
    }
    ?>
</body>
</html>