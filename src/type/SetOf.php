<?php
/* 
 * (c) 2016 by Dennis Birkholz <dennis@birkholz.biz>
 * All rights reserved.
 * For the license to use this code, see the bundled LICENSE file.
 */
namespace DennisBirkholz\BER\type;

use \DennisBirkholz\BER\Constants;

class SetOf extends SequenceOf
{
	const TYPE	= Constants::T_CONSTRUCTED;
	const CLS	= Constants::C_UNIVERSAL;
	const TAG	= 17;
}
