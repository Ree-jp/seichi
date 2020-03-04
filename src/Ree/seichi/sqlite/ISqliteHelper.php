<?php

namespace Ree\seichi\sqlite;


interface ISqliteHelper
{
	/**
	 * ISqliteHelper constructor.
	 * @param string $db
	 */
	public function __construct(string $db);

	/**
	 * @param string $name
	 * @param string|null $xuid
	 * @param int $level
	 * @param int $xp
	 * @param array $skill
	 * @param int $skillPoint
	 * @param float $mana
	 * @param float $coin
	 * @param int $gatya
	 * @return bool
	 */
	public function create(string $name, string $xuid = null, int $level = 0, int $xp = 0, array $skill = ['skil'], int $skillPoint = 0, float $mana = 0, float $coin = 10, int $gatya = 10): bool ;

	/**
	 * @param string $name
	 * @return bool
	 */
	public function isExists(string $name): bool ;

	/**
	 * @param string $name
	 * @param int $level
	 * @return bool
	 */
	public function setLevel(string $name, int $level): bool ;

	/**
	 * @param string $name
	 * @return int
	 */
	public function getLevel(string $name): ?int ;

	/**
	 * @param string $name
	 * @param array $skil
	 * @return bool
	 */
	public function setSkill(string $name, array $skil): bool ;

	/**
	 * @param string $name
	 * @return array
	 */
	public function getSkill(string $name): ?array ;

	/**
	 * @param string $name
	 * @param int $point
	 * @return bool
	 */
	public function setSkillPoint(string $name, int $point): bool ;

	/**
	 * @param string $name
	 * @return int
	 */
	public function getSkillPoint(string $name): ?int ;

	/**
	 * @param string $name
	 * @param float $mana
	 * @return bool
	 */
	public function setMana(string $name, float $mana): bool ;

	/**
	 * @param string $name
	 * @return float
	 */
	public function getMana(string $name): ?float ;

	/**
	 * @param string $name
	 * @param string $coin
	 * @return bool
	 */
	public function setCoin(string $name,string $coin): bool;

	/**
	 * @param string $name
	 * @return float
	 */
	public function getCoin(string $name): ?float ;

	/**
	 * @param string $name
	 * @param int $xp
	 * @return bool
	 */
	public function setExperience(string $name, int $xp): bool ;

	/**
	 * @param string $name
	 * @return int
	 */
	public function getExperience(string $name): ?int ;

	/**
	 * @param string $name
	 * @param int $gatya
	 * @return bool
	 */
	public function setGatya(string $name, int $gatya): bool ;

	/**
	 * @param string $name
	 * @return int
	 */
	public function getGatya(string $name): ?int ;

	/**
	 * @return array
	 */
	public function getAllData(): array;

	/**
	 * @param string $name
	 * @param string $xuid
	 * @return bool
	 */
	public function setXuid(string $name, string $xuid): bool ;

	/**
	 * @param string $name
	 * @return string
	 */
	public function getXuid(string $name): ?string ;

	public function begin(): void ;

	public function commit(): void ;

	public function rollBack(): void ;
}