<?php


namespace setasign\Fpdi\PdfParser\Type;

/**
 * Class representing a boolean PDF object
 *
 * @package setasign\Fpdi\PdfParser\Type
 */
class PdfBoolean extends PdfType
{
    /**
     * Helper method to create an instance.
     *
     * @param bool $value
     * @return self
     */
    public static function create($value)
    {
        $v = new self;
        $v->value = (boolean) $value;
        return $v;
    }

    /**
     * Ensures that the passed value is a PdfBoolean instance.
     *
     * @param mixed $value
     * @return self
     * @throws PdfTypeException
     */
    public static function ensure($value)
    {
        return PdfType::ensureType(self::class, $value, 'Boolean value expected.');
    }
}
