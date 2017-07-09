<?php
namespace Eard;


use pocketmine\item\Item;


/***
*
*	アイテムの、日本語名を入れておくためのやつ
*/
class ItemName{



	public static function getNameOf($id, $meta){
		$id = $item->getId();
		$meta = $item->getMetadata();

		if( isset(self::$listById[$id][$meta]) ){
			return self::$listById[$id][$meta]; //書いてあれば日本語名
		}else{
			return Item::get()->getName(); //書いてなければ英名
		}
	}

	public static function init(){

		// 変換
		$list = [];
		foreach(self::$listByName as $name => $i){
			$list[$i[0]][$i[1]] = $name;
		}
		self::$listById = $list;
	}


	private static $listByName = [
		"焼き石" => [1,0],
		"石" => [1,0],
		"花崗岩" => [1,1],
		"磨かれた花崗岩" => [1,2],
		"閃緑岩" => [1,3],
		"磨かれた閃緑岩" => [1,4],
		"安山岩" => [1,5],
		"磨かれた安山岩" => [1,6],
		"草ブロック" => [2,0],
		"土" => [3,0],


		"鉄のスコップ" => [256, 0],
		"鉄のピッケル" => [257,0],
		"鉄のオノ" => [258,0],
		"打ち金と火打石" => [259,0],
		"りんご" => [260,0],
		"弓" => [261,0],
		"矢" => [262,0],
		"石炭" => [263,0],
		"ダイヤモンド" => [264,0],
		"鉄インゴット" => [265,0],
		"金インゴット" => [266,0],
		"鉄のソード" => [267,0],
		"木のソード" => [268,0],
		"木のスコップ" => [269,0],
		"木のピッケル" => [270,0],
		"木のオノ" => [271,0],
		"石のソード" => [272,0],
		"石のスコップ" => [273,0],
		"石のピッケル" => [274,0],
		"石のオノ" => [275,0],
		"ダイヤのソード" => [276,0],
		"ダイヤのスコップ" => [277,0],
		"ダイヤのピッケル" => [278,0],
		"ダイヤのオノ" => [279,0],
		"棒" => [280,0];
		"ボウル" => [281,0];
		"マッシュルームスープ" => [282,0];
		"金のソード" => [283,0];
		"金のスコップ" => [284,0];
		"金のピッケル" => [285,0];
		"金のオノ" => [286,0];
		"糸" => [287,0];
		"羽" => [288,0];
		"火薬" => [289,0];
		"木のクワ" => [290,0];
		"石のクワ" => [291,0];
		"鉄のクワ" => [292,0];
		"ダイヤのクワ" => [293,0];
		"金のクワ" => [294,0];
		"種" => [295,0];
		"麦" => [296,0];
		"おいしいパン" => [297,0];

		"" => [298,0];
		"" => [299,0];
		"" => [300,0];
		"" => [301,0];
		"" => [302,0];
		"" => [303,0];
		"" => [304,0];
		"" => [305,0];
		"" => [306,0];
		"" => [307,0];
		"" => [308,0];
		"" => [309,0];
		"" => [310,0];
		"" => [311,0];
		"" => [312,0];
		"" => [313,0];
		"" => [314,0];
		"" => [315,0];
		"" => [316,0];
		"" => [317,0];
		"" => [318,0];
		"" => [319,0];
		"" => [320,0];
		"" => [321,0];
		"" => [322,0];
		"" => [323,0];
		"" => [324,0];
		"" => [325,0];

		//誰かこんな感じで追加していってください！おなしゃす！
	];
	private static $listById = [];
}