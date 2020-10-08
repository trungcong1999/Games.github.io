<?php
interface Iproduct
{
    function insert($payload,$src,$srcOfContent);
    function delete($id);
    function update($payload);
}