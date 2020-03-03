<?php

namespace pocketmine\network\protocol;

class ChangeDimensionPacket extends PEPacket {

	const NETWORK_ID = Info::CHANGE_DIMENSION_PACKET;
	const PACKET_NAME = "CHANGE_DIMENSION_PACKET";

	const DIMENSION_NORMAL = 0;
	const DIMENSION_NETHER = 1;
	const DIMENSION_END = 2;

	public $dimension;
	public $x;
	public $y;
	public $z;
	public $respawn = false;

	public function encode($playerProtocol) {
		$this->reset($playerProtocol);
		$this->putSignedVarInt($this->dimension);
		$this->putLFloat($this->x);
		$this->putLFloat($this->y);
		$this->putLFloat($this->z);
		$this->putByte($this->respawn);
	}

	public function decode($playerProtocol) {

	}

}
