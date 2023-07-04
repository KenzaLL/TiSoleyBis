<?php


class panier
{

    public function __construct()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (!isset($_SESSION['panier'])) {
            $_SESSION['panier'] = array();
        }
    }

    public function total()
    {
        $DB = new DB;
        $total = 0;
        $ids = array_keys($_SESSION['panier']);
        if (!empty($ids)) {
            $products = [];
        } else {
            $products = $DB->query('SELECT id, price FROM pizza WHERE id IN(' . implode(',', $ids) . ')');
        }
    }

    public function add($product_id)
    {

        // si j'ai ce produit au panier ça fait +1
        if (isset($_SESSION['panier'][$product_id])) {
            $_SESSION['panier'][$product_id]++;
            // sinon je met 1
        } else {
            $_SESSION['panier'][$product_id] = 1;
        }
    }

    public function decrease($product_id)
    {

        // si j'ai ce produit au panier ça fait -1
        if (isset($_SESSION['panier'][$product_id])) {
            $_SESSION['panier'][$product_id]--;
            if ($_SESSION['panier'][$product_id] < 1) {
                unset($_SESSION['panier'][$product_id]);
            }
        }
    }

    public function empty()
    {
        if(isset($_SESSION['panier'])) {
            unset($_SESSION['panier']);
        }
    }


    public function del($product_id)
    {
        unset($_SESSION['panier'][$product_id]);
        if (!empty($_SESSION['panier'])) {
        }
    }

    public function save($firstname, $lastname, $numberphone, $email, $date)
    {
        try {
            $DB = new DB;
            $query = $DB->query("INSERT INTO `commande` (`id`, `user_id`, `lastname`, `firstname`, `email`, `numberphone`, `date_time`) VALUES (NULL, NULL, '$lastname', '$firstname', '$email', '$numberphone', '$date');");
            $commande_id = $DB->db->lastInsertId();
            foreach ($_SESSION['panier'] as $pizza_id => $quantite) {
                $query = $DB->query("INSERT INTO `commande_pizza` (`id`, `pizza_id`, `commande_id`, `quantite`) VALUES (NULL, $pizza_id, $commande_id, $quantite);");
            }
            return true;
        } catch (PDOException $e) {
            return false;
        };
    }
}
