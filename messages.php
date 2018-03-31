<?php

function russian_numbers($avtor,$avtora,$avtorov)
{
    return "{0} :count $avtorov
    |{1} :count $avtor
    |[2,4] :count $avtora
    |[5,20] :count $avtorov
    |{21} :count $avtor
    |[22,24] :count $avtora
    |[25,30] :count $avtorov
    |{31} :count $avtor
    |[32,34] :count $avtora
    |[35,40] :count $avtorov
    |{41} :count $avtor
    |[42,44] :count $avtora
    |[45,50] :count $avtorov
    |{51} :count $avtor
    |[52,54] :count $avtora
    |[55,60] :count $avtorov
    |{61} :count $avtor
    |[62,64] :count $avtora
    |[65,70] :count $avtorov
    |{71} :count $avtor
    |[72,74] :count $avtora
    |[75,80] :count $avtorov
    |{81} :count $avtor
    |[82,84] :count $avtora
    |[85,90] :count $avtorov
    |{91} :count $avtor
    |[92,94] :count $avtora
    |[95,99] :count $avtorov";
}


return [
     'book' => russian_numbers('книга на сайте','книги на сайте','книг на сайте')
];
