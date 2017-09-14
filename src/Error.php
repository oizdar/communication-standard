<?php
namespace oizdar\CommunicationStandard;

use Symfony\Component\HttpFoundation\JsonResponse;

class Error extends JsonResponse
{
	const CODE_GENERAL_ERROR = 'GENERAL_ERROR';
	const CODE_VALIDATION_ERROR = 'VALIDATION_ERROR';

	public function __construct(string $errorMessage, array $errorData = [], $code = self::CODE_GENERAL_ERROR, $status = self::HTTP_BAD_REQUEST, array $headers = [])
	{
		parent::__construct('', $status, $headers);

		$data = [
			'code' => $code,
			'error' => [
				'message' => $errorMessage,
				'data' => $errorData
			]
		];

		$this->setData($data);
	}

}
