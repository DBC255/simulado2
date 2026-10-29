CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `produtos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `categoria` enum('racoes','medicamentos','brinquedos','acessorios','higiene') NOT NULL,
  `marca` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `preco_custo` decimal(6,2) NOT NULL,
  `preco_venda` decimal(6,2) NOT NULL,
  `quantidade_disponivel` bigint(20) NOT NULL,
  `estoque_minimo` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `movimentacoes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `produto_id` bigint(20) unsigned NOT NULL,
  `quantidade` bigint(20) NOT NULL,
  `tipo` enum('entrada','saida') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `movimentacoes_produto_id_foreign` (`produto_id`),
  CONSTRAINT `movimentacoes_produto_id_foreign` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

SELECT `produtos`.`id`,
    `produtos`.`nome`,
    `produtos`.`categoria`,
    `produtos`.`marca`,
    `produtos`.`descricao`,
    `produtos`.`preco_custo`,
    `produtos`.`preco_venda`,
    `produtos`.`quantidade_disponivel`,
    `produtos`.`estoque_minimo`,
    `produtos`.`created_at`,
    `produtos`.`updated_at`
FROM `laravel`.`produtos`;
