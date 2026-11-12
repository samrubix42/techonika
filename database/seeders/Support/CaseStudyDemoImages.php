<?php

namespace Database\Seeders\Support;

/**
 * Generates on-brand SVG demo illustrations (1200x750) for the seeded case studies.
 * Each image is a dark browser-window mockup with an amber illustration of the project type.
 */
class CaseStudyDemoImages
{
    public const TYPES = ['ecommerce', 'booking', 'leads', 'social', 'seo', 'local'];

    public static function make(string $type, string $urlLabel): string
    {
        $inner = match ($type) {
            'ecommerce' => self::ecommerce(),
            'booking'   => self::booking(),
            'leads'     => self::leads(),
            'social'    => self::social(),
            'seo'       => self::seo(),
            'local'     => self::local(),
            default     => '',
        };

        $url = htmlspecialchars('techonika.com/' . $urlLabel, ENT_XML1);

        return <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 750" width="1200" height="750" font-family="Montserrat, 'Segoe UI', Arial, sans-serif">
  <defs>
    <linearGradient id="bg" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#0a0a0a"/><stop offset="1" stop-color="#18130a"/></linearGradient>
    <radialGradient id="glow" cx=".5" cy=".5" r=".5"><stop offset="0" stop-color="#ffc700" stop-opacity=".32"/><stop offset="1" stop-color="#ffc700" stop-opacity="0"/></radialGradient>
    <linearGradient id="amber" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#ffd84d"/><stop offset="1" stop-color="#ff9f0a"/></linearGradient>
    <linearGradient id="fade" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#ffc700" stop-opacity=".45"/><stop offset="1" stop-color="#ffc700" stop-opacity="0"/></linearGradient>
    <linearGradient id="tile" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#2a2414"/><stop offset="1" stop-color="#151515"/></linearGradient>
    <pattern id="dots" width="28" height="28" patternUnits="userSpaceOnUse"><circle cx="2" cy="2" r="1.2" fill="#fff" fill-opacity=".06"/></pattern>
  </defs>
  <rect width="1200" height="750" fill="url(#bg)"/>
  <rect width="1200" height="750" fill="url(#dots)"/>
  <circle cx="960" cy="110" r="430" fill="url(#glow)"/>
  <circle cx="140" cy="720" r="320" fill="url(#glow)" opacity=".55"/>

  <rect x="120" y="100" width="960" height="570" rx="24" fill="#111" stroke="#fff" stroke-opacity=".1"/>
  <path d="M144 100h912a24 24 0 0 1 24 24v32H120v-32a24 24 0 0 1 24-24z" fill="#1a1a1a"/>
  <circle cx="152" cy="128" r="6" fill="#ff5f57"/><circle cx="174" cy="128" r="6" fill="#febc2e"/><circle cx="196" cy="128" r="6" fill="#28c840"/>
  <rect x="420" y="114" width="360" height="28" rx="14" fill="#0b0b0b" stroke="#fff" stroke-opacity=".06"/>
  <text x="600" y="133" text-anchor="middle" font-size="13" fill="#8a8a8a">{$url}</text>

  <g transform="translate(120,156)">
{$inner}
  </g>
</svg>
SVG;
    }

    private static function panel(int $x, int $y, int $w, int $h): string
    {
        return "<rect x=\"$x\" y=\"$y\" width=\"$w\" height=\"$h\" rx=\"18\" fill=\"#181818\" stroke=\"#fff\" stroke-opacity=\".07\"/>";
    }

    private static function line(int $x, int $y, int $w, float $op = .25, int $h = 10): string
    {
        return "<rect x=\"$x\" y=\"$y\" width=\"$w\" height=\"$h\" rx=\"" . ($h / 2) . "\" fill=\"#fff\" fill-opacity=\"$op\"/>";
    }

    private static function star(float $cx, float $cy, float $r, string $fill = '#ffc700'): string
    {
        $pts = [];
        for ($i = 0; $i < 10; $i++) {
            $rad = $i % 2 === 0 ? $r : $r * 0.45;
            $a = deg2rad(-90 + $i * 36);
            $pts[] = round($cx + $rad * cos($a), 1) . ',' . round($cy + $rad * sin($a), 1);
        }

        return '<polygon points="' . implode(' ', $pts) . "\" fill=\"$fill\"/>";
    }

    private static function ecommerce(): string
    {
        $s = '<rect x="40" y="30" width="110" height="16" rx="8" fill="url(#amber)"/>'
            . self::line(560, 33, 60) . self::line(640, 33, 60) . self::line(720, 33, 60)
            . '<circle cx="900" cy="38" r="18" fill="#222"/><circle cx="912" cy="26" r="8" fill="#ffc700"/>';

        $prices = ['₹2,499', '₹1,899', '₹3,299'];
        foreach ([40, 340, 640] as $i => $x) {
            $op = [.9, .6, .75][$i];
            $s .= self::panel($x, 80, 280, 404)
                . "<rect x=\"" . ($x + 16) . "\" y=\"96\" width=\"248\" height=\"200\" rx=\"12\" fill=\"url(#tile)\"/>"
                . "<circle cx=\"" . ($x + 140) . "\" cy=\"196\" r=\"58\" fill=\"url(#amber)\" opacity=\"$op\"/>"
                . "<rect x=\"" . ($x + 110) . "\" y=\"150\" width=\"60\" height=\"92\" rx=\"14\" fill=\"#111\" opacity=\".55\"/>"
                . self::line($x + 16, 316, 180, .8, 12) . self::line($x + 16, 340, 120)
                . "<text x=\"" . ($x + 16) . "\" y=\"388\" font-size=\"24\" font-weight=\"700\" fill=\"#ffc700\">{$prices[$i]}</text>"
                . "<rect x=\"" . ($x + 16) . "\" y=\"412\" width=\"248\" height=\"48\" rx=\"24\" fill=\"url(#amber)\"/>"
                . "<text x=\"" . ($x + 140) . "\" y=\"442\" text-anchor=\"middle\" font-size=\"15\" font-weight=\"700\" fill=\"#111\">Add to cart</text>";
        }

        return $s;
    }

    private static function booking(): string
    {
        $s = self::panel(40, 30, 560, 454)
            . '<text x="72" y="80" font-size="24" font-weight="700" fill="#fff">November</text>'
            . '<circle cx="530" cy="72" r="16" fill="#222"/><circle cx="566" cy="72" r="16" fill="#222"/>';

        foreach (['M', 'T', 'W', 'T', 'F', 'S', 'S'] as $i => $d) {
            $s .= '<text x="' . (96 + $i * 72) . '" y="124" text-anchor="middle" font-size="13" fill="#777">' . $d . '</text>';
        }

        $selected = [9, 17];
        $dotted = [3, 6, 12, 15, 20, 24, 27, 31];
        for ($r = 0; $r < 5; $r++) {
            for ($c = 0; $c < 7; $c++) {
                $day = $r * 7 + $c + 1;
                $x = 64 + $c * 72;
                $y = 142 + $r * 64;
                $isSel = in_array($day, $selected);
                $s .= "<rect x=\"$x\" y=\"$y\" width=\"64\" height=\"56\" rx=\"12\" fill=\"" . ($isSel ? 'url(#amber)' : '#222') . '"/>';
                if ($day <= 30) {
                    $s .= '<text x="' . ($x + 32) . '" y="' . ($y + 34) . '" text-anchor="middle" font-size="16" font-weight="600" fill="' . ($isSel ? '#111' : '#ccc') . "\">$day</text>";
                }
                if (in_array($day, $dotted) && $day <= 30) {
                    $s .= '<circle cx="' . ($x + 32) . '" cy="' . ($y + 46) . '" r="3" fill="#ffc700"/>';
                }
            }
        }

        $s .= self::panel(630, 30, 290, 454)
            . '<text x="654" y="76" font-size="17" font-weight="700" fill="#fff">Today</text>'
            . '<text x="896" y="76" text-anchor="end" font-size="13" fill="#ffc700">4 booked</text>';
        foreach (['09:30', '11:00', '14:15', '16:45'] as $i => $t) {
            $y = 100 + $i * 92;
            $s .= "<rect x=\"650\" y=\"$y\" width=\"250\" height=\"78\" rx=\"14\" fill=\"#222\"/>"
                . '<circle cx="682" cy="' . ($y + 39) . '" r="18" fill="#ffc700" fill-opacity="' . (.9 - $i * .15) . '"/>'
                . self::line(712, $y + 24, 110, .8) . self::line(712, $y + 46, 80)
                . '<text x="884" y="' . ($y + 33) . "\" text-anchor=\"end\" font-size=\"12\" font-weight=\"600\" fill=\"#ffc700\">$t</text>";
        }

        return $s;
    }

    private static function leads(): string
    {
        $s = self::panel(40, 30, 460, 454)
            . '<text x="72" y="78" font-size="17" font-weight="700" fill="#fff">Campaign funnel</text>';

        $stages = [['Impressions', '1.2M'], ['Clicks', '48K'], ['Leads', '3,140'], ['Site visits', '612']];
        foreach ($stages as $i => [$label, $val]) {
            $top = 380 - $i * 80;
            $bot = $top - 80;
            $y = 108 + $i * 88;
            $cx = 270;
            $op = 1 - $i * .18;
            $s .= '<polygon points="' . ($cx - $top / 2) . ",$y " . ($cx + $top / 2) . ",$y " . ($cx + $bot / 2) . ',' . ($y + 76) . ' ' . ($cx - $bot / 2) . ',' . ($y + 76) . "\" fill=\"url(#amber)\" opacity=\"$op\"/>"
                . "<text x=\"$cx\" y=\"" . ($y + 34) . "\" text-anchor=\"middle\" font-size=\"13\" font-weight=\"600\" fill=\"#111\">$label</text>"
                . "<text x=\"$cx\" y=\"" . ($y + 56) . "\" text-anchor=\"middle\" font-size=\"18\" font-weight=\"800\" fill=\"#111\">$val</text>";
        }

        $s .= self::panel(530, 30, 390, 454)
            . '<text x="560" y="78" font-size="17" font-weight="700" fill="#fff">Cost per lead</text>'
            . '<text x="560" y="140" font-size="48" font-weight="800" fill="#ffc700">-54%</text>'
            . self::line(560, 160, 160);

        foreach ([250, 220, 185, 158, 135, 118] as $i => $h) {
            $x = 566 + $i * 56;
            $last = $i === 5;
            $s .= "<rect x=\"$x\" y=\"" . (460 - $h) . "\" width=\"36\" height=\"$h\" rx=\"8\" fill=\"" . ($last ? 'url(#amber)' : '#2b2b2b') . '"/>';
        }

        return $s;
    }

    private static function social(): string
    {
        $s = '<rect x="90" y="14" width="270" height="474" rx="38" fill="#1a1a1a" stroke="#fff" stroke-opacity=".12" stroke-width="2"/>'
            . '<rect x="185" y="24" width="80" height="10" rx="5" fill="#0b0b0b"/>'
            . '<circle cx="126" cy="72" r="18" fill="url(#amber)"/>' . self::line(154, 62, 100, .8) . self::line(154, 80, 60)
            . '<rect x="106" y="104" width="238" height="238" rx="14" fill="url(#tile)"/>'
            . '<circle cx="225" cy="210" r="62" fill="url(#amber)" opacity=".85"/>'
            . '<path d="M200 300 q25 -40 50 0" stroke="#111" stroke-width="10" fill="none" stroke-linecap="round" opacity=".5"/>'
            . '<path d="M124 372c0-10 13-14 18-5 5-9 18-5 18 5 0 11-18 20-18 20s-18-9-18-20z" fill="#ff4d6d"/>'
            . '<circle cx="190" cy="378" r="11" fill="none" stroke="#bbb" stroke-width="3"/>'
            . '<path d="M226 368l22 10-22 10z" fill="none" stroke="#bbb" stroke-width="3" stroke-linejoin="round"/>'
            . self::line(118, 410, 140, .7) . self::line(118, 432, 200) . self::line(118, 452, 170);

        // floating engagement bubbles
        $s .= '<rect x="320" y="90" width="120" height="44" rx="22" fill="url(#amber)"/>'
            . '<text x="380" y="118" text-anchor="middle" font-size="15" font-weight="800" fill="#111">+2.4K ♥</text>'
            . '<rect x="20" y="300" width="110" height="40" rx="20" fill="#222" stroke="#ffc700" stroke-opacity=".5"/>'
            . '<text x="75" y="325" text-anchor="middle" font-size="13" font-weight="700" fill="#ffc700">5.7% ER</text>';

        $s .= self::panel(470, 30, 450, 454)
            . '<text x="500" y="78" font-size="17" font-weight="700" fill="#fff">Followers</text>'
            . '<text x="500" y="138" font-size="48" font-weight="800" fill="#ffc700">31K</text>'
            . '<text x="610" y="138" font-size="15" font-weight="600" fill="#28c840">▲ 675%</text>'
            . '<path d="M500 440 L560 425 L620 430 L680 395 L740 360 L800 300 L860 250 L890 205 L890 460 L500 460Z" fill="url(#fade)"/>'
            . '<path d="M500 440 L560 425 L620 430 L680 395 L740 360 L800 300 L860 250 L890 205" fill="none" stroke="#ffc700" stroke-width="4" stroke-linejoin="round" stroke-linecap="round"/>'
            . '<circle cx="890" cy="205" r="8" fill="#ffc700" stroke="#181818" stroke-width="4"/>';

        return $s;
    }

    private static function seo(): string
    {
        $s = '<rect x="40" y="26" width="880" height="56" rx="28" fill="#1a1a1a" stroke="#fff" stroke-opacity=".08"/>'
            . '<circle cx="78" cy="52" r="10" fill="none" stroke="#ffc700" stroke-width="3"/><path d="M85 59l9 9" stroke="#ffc700" stroke-width="3" stroke-linecap="round"/>'
            . '<text x="110" y="59" font-size="17" fill="#ccc">industrial equipment manufacturer</text>';

        foreach (range(0, 3) as $i) {
            $y = 108 + $i * 94;
            $first = $i === 0;
            $s .= "<rect x=\"40\" y=\"$y\" width=\"420\" height=\"80\" rx=\"16\" fill=\"" . ($first ? '#1f1a0c' : '#181818') . '" stroke="' . ($first ? '#ffc700' : '#fff') . '" stroke-opacity="' . ($first ? '.7' : '.06') . '"/>'
                . '<text x="62" y="' . ($y + 48) . '" font-size="22" font-weight="800" fill="' . ($first ? '#ffc700' : '#555') . '">#' . ($i + 1) . '</text>'
                . self::line(110, $y + 24, $first ? 240 : 200, $first ? .9 : .5, 12) . self::line(110, $y + 48, 300, .2);
        }

        $s .= self::panel(490, 108, 430, 366)
            . '<text x="518" y="150" font-size="17" font-weight="700" fill="#fff">Organic traffic</text>'
            . '<text x="518" y="200" font-size="40" font-weight="800" fill="#ffc700">+312%</text>';
        foreach ([260, 330, 400] as $gy) {
            $s .= "<line x1=\"518\" y1=\"$gy\" x2=\"892\" y2=\"$gy\" stroke=\"#fff\" stroke-opacity=\".06\"/>";
        }
        $s .= '<path d="M518 440 L570 432 L622 425 L674 405 L726 380 L778 340 L830 290 L892 235 L892 450 L518 450Z" fill="url(#fade)"/>'
            . '<path d="M518 440 L570 432 L622 425 L674 405 L726 380 L778 340 L830 290 L892 235" fill="none" stroke="#ffc700" stroke-width="4" stroke-linejoin="round" stroke-linecap="round"/>'
            . '<circle cx="892" cy="235" r="8" fill="#ffc700" stroke="#181818" stroke-width="4"/>';

        return $s;
    }

    private static function local(): string
    {
        $s = '<clipPath id="map"><rect x="40" y="30" width="560" height="454" rx="18"/></clipPath>'
            . '<g clip-path="url(#map)"><rect x="40" y="30" width="560" height="454" fill="#151515"/>'
            . '<rect x="330" y="60" width="150" height="110" rx="10" fill="#1d2416"/>'
            . '<rect x="70" y="330" width="130" height="120" rx="10" fill="#1d2416"/>';
        foreach ([['M40 210 L600 170', 22], ['M250 30 L210 484', 22], ['M40 400 L600 360', 14], ['M470 30 L520 484', 14], ['M40 110 L320 300 L600 290', 10]] as [$d, $w]) {
            $s .= "<path d=\"$d\" stroke=\"#262626\" stroke-width=\"$w\" fill=\"none\" stroke-linecap=\"round\"/>";
        }
        foreach ([[120, 150], [540, 120], [400, 430], [150, 280]] as [$px, $py]) {
            $s .= "<path d=\"M$px " . ($py + 18) . " c-12 -14 -14 -20 -14 -26 a14 14 0 0 1 28 0 c0 6 -2 12 -14 26z\" fill=\"#555\"/>";
        }
        $s .= '<circle cx="345" cy="245" r="70" fill="url(#glow)"/>'
            . '<path d="M345 280 c-24 -28 -28 -40 -28 -52 a28 28 0 0 1 56 0 c0 12 -4 24 -28 52z" fill="url(#amber)"/>'
            . '<circle cx="345" cy="228" r="10" fill="#111"/></g>'
            . '<rect x="40" y="30" width="560" height="454" rx="18" fill="none" stroke="#fff" stroke-opacity=".07"/>';

        $s .= self::panel(630, 30, 290, 454)
            . '<rect x="646" y="46" width="258" height="140" rx="12" fill="url(#tile)"/>'
            . '<circle cx="775" cy="116" r="40" fill="url(#amber)" opacity=".8"/>'
            . self::line(650, 210, 190, .9, 14)
            . '<text x="650" y="262" font-size="26" font-weight="800" fill="#fff">4.8</text>';
        for ($i = 0; $i < 5; $i++) {
            $s .= self::star(712 + $i * 26, 253, 10);
        }
        $s .= '<text x="650" y="290" font-size="13" fill="#888">200+ Google reviews</text>'
            . self::line(650, 312, 230, .2) . self::line(650, 332, 180, .2)
            . '<rect x="650" y="372" width="120" height="44" rx="22" fill="url(#amber)"/><text x="710" y="400" text-anchor="middle" font-size="14" font-weight="700" fill="#111">Call</text>'
            . '<rect x="780" y="372" width="124" height="44" rx="22" fill="none" stroke="#ffc700" stroke-opacity=".6"/><text x="842" y="400" text-anchor="middle" font-size="14" font-weight="700" fill="#ffc700">Directions</text>'
            . '<text x="650" y="456" font-size="12" font-weight="600" fill="#28c840">● Open now</text>';

        return $s;
    }
}
