<?php
namespace oizdar\CommunicationStandard;

class Error extends Response
{
	const CODE_GENERAL_ERROR = 'GENERAL_ERROR';
	const CODE_VALIDATION_ERROR = 'VALIDATION_ERROR';

	public function __construct(string $errorMessage, array $errorData = [], $code = self::CODE_GENERAL_ERROR, $status = self::HTTP_BAD_REQUEST, array $headers = [])
	{
		$response = [
			'code' => $code,
			'error' => [
				'message' => $errorMessage,
				'data' => $errorData
			]
		];
		parent::__construct($response, $code, $status, $headers);
	}

}
