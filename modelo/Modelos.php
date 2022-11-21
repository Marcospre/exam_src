<?php
namespace modelo;

interface Modelos
{
    function selectAll();
    function selectById($id);
    function delete($id);
    function update($itemAssoc);
    function insert($itemAssoc);
}

