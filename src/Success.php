<?php
namespace oizdar\CommunicationStandard;

class Success extends Response
{
	const CODE_OK = 'OK';

	public function __construct($data = null, $code = self::CODE_OK, $status = self::HTTP_OK, array $headers = [])
	{
		parent::__construct($data, $code, $status, $headers);
	}
}
