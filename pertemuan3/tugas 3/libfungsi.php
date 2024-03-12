<?php

	function kelulusan($hasil){
		
		if($hasil > 55){
			$title = "Lulus";
		} else{
			$title = "Tidak lulus";
		}
		return $title;
	}
	
	function grade($ttl) {
	
		if($ttl <= 100 && $ttl >= 85){
			$grade = "A";
			$predi = "Sangat Memuaskan";
		} elseif($ttl <= 84 && $ttl >= 70){
			$grade = "B";
			$predi = "Memuaskan";
		} elseif($ttl <= 69 && $ttl >= 56){
			$grade = "C";
			$predi = "Cukup baik";
		} elseif($ttl <= 55 && $ttl >= 36){
			$grade = "D";
			$predi = "Cukup";
		} elseif($ttl <= 35 && $ttl >= 0){
			$grade = "E";
			$predi = "Kurang";
		} else{
			$grade = "I";

		}
		return [$grade, $predi];
	}

	function rerata($nilaiuts, $nilaiuas, $nilaitgs) {
		$ratara = ($nilaiuts + $nilaiuas + $nilaitgs) / 3;
		return $ratara;
	}
?>