<?php

namespace app\models;

use Yii;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DaoQuery
 *
 * @author LPTIK
 */
class DAO {

    //INI SAMA DENGAN DI ATAS BEDA NAMA FUNGSINYA SAJA

    public function QueryAll($query, $params) {
        $conn = Yii::$app->db;
        $command = $conn->createCommand($query);
        foreach ($params as $key => $value) {
            $command->bindValue($key, $value);
        }
        $rowData = $command->queryAll();
        return $rowData;
    }

    public function QueryRow($query, $params) {
        $conn = Yii::$app->db;
        $command = $conn->createCommand($query);
        foreach ($params as $key => $value) {
            $command->bindValue($key, $value);
        }
        $rowData = $command->queryOne();
        return $rowData;
    }

    public function Execute($query, $params) {
        $conn = Yii::$app->db;
        $command = $conn->createCommand($query);
        foreach ($params as $key => $value) {
            $command->bindValue($key, $value);
        }
        $result = $command->execute();
        return $result;
    }

    public function BatchInsert($tabel, $attributes, $params) {
        $result = Yii::$app->db->createCommand()
                ->batchInsert($tabel, $attributes, $params)
                ->execute();
        return $result;
    }

    public function beginTransaction() {
        $conn = Yii::$app->db;
        return $conn->beginTransaction();
    }

}
