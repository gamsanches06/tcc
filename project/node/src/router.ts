import { Router } from "express";
import { firstController } from "./controllers/first.controller";


const router: Router = Router()

// Routes
router.get("/", firstController.home);

export { router };