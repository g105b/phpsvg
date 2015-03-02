<?php
namespace g105b\phpsvg;

use \DOMImplementation;
use \DomDocument;

class SvgRenderingContext {

private $document;

public $context;

// Lines
public $lineWidth;
public $lineCap;
public $lineJoin;
public $miterLimit;
public $lineDashOffset;

// Font
public $font;
public $textAlign;
public $textBaseLine;
public $direction;

// Style
public $fillStyle;
public $strokeStyle;

// Shadows
public $shadowBlur;
public $shadowColor;
public $shadowOffsetX;
public $shadowOffsetY;

// Transforms
public $currentTransform;

public function __construct() {
	$implementation = new DOMImplementation();
	$docType = $implementation->createDocumentType(
		"svg",
		"-//W3C//DTD SVG 1.1//EN",
		"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"
	);
	$this->document = new DomDocument("1.0", "utf-8");
	$this->document->insertBefore($docType);
	$this->context = $this->document->createElement("svg");
	$this->context->setAttribute("version", "1.1");
	$this->document->appendChild($this->context);
}

public function render() {
	return $this->document->saveXML();
}

// Rectangles
public function fillRect($x, $y, $width, $height) {

}

public function strokeRect($x, $y, $width, $height) {

}

// Text
public function fillText($text, $x, $y, $maxWidth = null) {

}

public function strokeText($text, $x, $y, $maxWidth = null) {

}

// Lines
public function getLineDash() {

}

public function setLineDash($segments) {

}

// Gradients
public function createLinearGradient($x0, $y0, $x1, $y1) {

}

public function createRadialGradient($x0, $y0, $r0, $x1, $y1, $r1) {

}

public function createPattern($image, $repetition) {

}

// Paths
public function beginPath() {

}

public function closePath() {

}

public function moveTo($x, $y) {

}

public function lineTo($x, $y) {

}

public function bezierCurveTo($cp1x, $cp1y, $cp2x, $cp2y, $x, $y) {

}

public function quadraticCurveTo($cpx, $cpy, $x, $y) {

}

public function arc($x, $y, $radius, $startAngle, $endAngle, $anticlockwise) {

}

public function arcTo($x1, $y1, $x2, $y2, $radius) {

}

public function ellipse($x, $y, $radiusX, $radiusY, $rotation,
$startAngle, $endAngle, $anticlockwise) {

}

public function rect($x, $y, $width, $height) {

}

// Drawing paths
public function fill($varArgs = null) {

}

public function stroke($path = null) {

}

public function clip($varArgs = null) {

}

public function isPointInPath($varArgs) {

}

public function isPointInStroke($varArgs) {

}

// Transforms
public function rotate($angle) {

}

public function scale($x, $y) {

}

public function translate($x, $y) {

}

public function transform($a, $b, $c, $d, $e, $f) {

}

public function setTransform($a, $b, $c, $d, $e, $f) {

}

public function resetTransform() {

}

}#